<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
    }
    
    public function index(){
        if (!$this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }

        $page = $this->input->get('page') ?: 1;
        $perPage = $this->input->get('per-page') ?: 15;

        $data['registrations'] = $this->model->relation('registrations.*, bidang_lombas.name AS bidang_lomba', 'registrations', 'id', 'bidang_lombas', 'bid_lomba')->result();
        $data['registrationsCount'] = $this->model->count('registrations');

        $config['base_url'] = base_url('/dashboard/registrasi');
        $config['total_rows'] = $data['registrationsCount'];
        $config['per_page'] = $perPage;

        $this->pagination->initialize($config);

        // echo $this->pagination->create_links();

        $this->load->view('layout/user/header');
        $this->load->view('page/private/register/index', $data);
        $this->load->view('layout/user/footer');
    }

    public function create(){
        if (!$this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }

        $data['bidang_lombas']= $this->model->get_all('bidang_lombas')->result(); 

        $this->load->view('layout/user/header');
        $this->load->view('page/private/register/create', $data);
        $this->load->view('layout/user/footer');
    }
    
    public function add()
    {
        // Ensure that the HTTP method is POST
        if ($this->input->post('_method') !== "POST") {
            $this->session->set_flashdata('error', 'Invalid request type');
            redirect('/registrasi');
        }
    
        // Validate the data
        $this->form_validation->set_rules('bid_lomba', 'Bidang lomba', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal sekolah', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama siswa', 'required');
        $this->form_validation->set_rules('jk_siswa', 'Jenis kelamin siswa', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|is_unique[registrations.nisn]');
        $this->form_validation->set_rules('tempat_lahir_siswa', 'Tempat lahir siswa', 'required');
        $this->form_validation->set_rules('tgl_lahir_siswa', 'Tanggal lahir siswa', 'required');
        $this->form_validation->set_rules('no_hp_siswa', 'Nomor handphone siswa', 'required|is_unique[registrations.no_hp_siswa]');
        $this->form_validation->set_rules('nama_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[registrations.nip]');
        $this->form_validation->set_rules('tempat_lahir_guru', 'Tempat lahir guru', 'required');
        $this->form_validation->set_rules('tgl_lahir_guru', 'Tanggal lahir guru', 'required');
        $this->form_validation->set_rules('no_hp_guru', 'Nomor handphone guru', 'required|is_unique[registrations.no_hp_guru]');
        // $this->form_validation->set_rules('file_bukti', 'File bukti', 'required|mime_in[file_bukti,application/pdf]');
    
        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/registrasi');
        }   
    
        // Define variables
        $bid_lomba = $this->input->post('bid_lomba');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $nama_siswa = $this->input->post('nama_siswa');
        $jk_siswa = $this->input->post('jk_siswa');
        $nisn = $this->input->post('nisn');
        $tempat_lahir_siswa = $this->input->post('tempat_lahir_siswa');
        $tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
        $no_hp_siswa = $this->input->post('no_hp_siswa');
        $nama_guru = $this->input->post('nama_guru');
        $jk_guru = $this->input->post('jk_guru');
        $nip = $this->input->post('nip');
        $tempat_lahir_guru = $this->input->post('tempat_lahir_guru');
        $tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
        $no_hp_guru = $this->input->post('no_hp_guru');
       
    
        $uploaded_data = $this->upload_pdf();
    
        // insert data to database
        $data = [
            'bid_lomba' => $bid_lomba,
            'asal_sekolah' => $asal_sekolah,
            'nama_siswa' => $nama_siswa,
            'jk_siswa' => $jk_siswa,
            'nisn' => $nisn,
            'tempat_lahir_siswa' => $tempat_lahir_siswa,
            'tgl_lahir_siswa' => $tgl_lahir_siswa,
            'no_hp_siswa' => $no_hp_siswa,
            'nama_guru' => $nama_guru,
            'jk_guru' => $jk_guru,
            'nip' => $nip,
            'tempat_lahir_guru' => $tempat_lahir_guru,
            'tgl_lahir_guru' => $tgl_lahir_guru,
            'no_hp_guru' => $no_hp_guru,
            'file_bukti' => $uploaded_data['file_name']
        ];
    
        $registration = $this->model->insert('registrations', $data);
    
        if (!$registration) {
            $this->session->set_flashdata('error', 'An error occurred during registration. Please try again.');
            redirect('/registrasi');
        }
    
        // return
        $this->session->set_flashdata('success', 'Registration successful.');
        redirect('/');
    }

    public function show($id) {
        $data = $this->model->relation_by_id(
            'registrations.*, bidang_lombas.name AS bidang_lomba', // select
            'registrations', // pTable
            'id', // pk
            'bidang_lombas', // ftable
            'bid_lomba', // fk
            'id_reg', // field id
            $id // value
        )->get()->row_array();

        $this->load->view('layout/adminlte/header');
        $this->load->view('page/private/register/detail', $data);
        $this->load->view('layout/adminlte/footer');    
    }

    public function update($id) {
        if ($this->session->has_flashdata && $this->model->current_user()->validation !== 2) {
            redirect('/');
        }

        $data['bidang_lombas'] = $this->model->get_all('bidang_lombas')->result_array();
        $data['registration'] = $this->model->relation_by_id(
            'registrations.*, bidang_lombas.name AS bidang_lomba', // select
            'registrations', // pTable
            'id', // pk
            'bidang_lombas', // ftable
            'bid_lomba', // fk
            'id_reg', // field id
            $id // value
        )->get()->row_array();

        if (!$data['registration']) {
            show_404();
        }

        $this->load->view('layout/adminlte/header');
        $this->load->view('page/private/register/update', $data);
        $this->load->view('layout/adminlte/footer');
    }

    public function edit($id) {
        $currData = $this->model->where('registrations', 'id_reg', $id)->get()->result_array();
    
        if (!$currData) {
            show_404();
        }
        
        if ($this->input->post('_method') !== "UPDATE" && $this->model->current_user()->validation !== 2) {
            // var_dump($this->model->current_user()->validation);
            // die();
            redirect('/');
        }

        // validation
        $this->form_validation->set_rules('asal_sekolah', 'Asal sekolah', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama siswa', 'required');
        $this->form_validation->set_rules('jk_siswa', 'Jenis kelamin siswa', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|max_length[10]');
        $this->form_validation->set_rules('tempat_lahir_siswa', 'Tempat lahir siswa', 'required');
        $this->form_validation->set_rules('tgl_lahir_siswa', 'Tanggal lahir siswa', 'required');
        $this->form_validation->set_rules('no_hp_siswa', 'Nomor hp siswa', 'required|numeric');
        $this->form_validation->set_rules('nama_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('jk_guru', 'Jenis kelamin guru', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required|max_length[18]');
        $this->form_validation->set_rules('tempat_lahir_guru', 'Tempat lahir guru', 'required');
        $this->form_validation->set_rules('tgl_lahir_guru', 'Tanggal lahir guru', 'required');
        $this->form_validation->set_rules('no_hp_guru', 'Nomor hp guru', 'required|numeric');

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/dashboard/data-pendaftar/edit/' . $id);
        }

        // Define variables
        $bid_lomba = $this->input->post('bid_lomba');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $nama_siswa = $this->input->post('nama_siswa');
        $jk_siswa = $this->input->post('jk_siswa');
        $nisn = $this->input->post('nisn');
        $tempat_lahir_siswa = $this->input->post('tempat_lahir_siswa');
        $tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
        $no_hp_siswa = $this->input->post('no_hp_siswa');
        $nama_guru = $this->input->post('nama_guru');
        $jk_guru = $this->input->post('jk_guru');
        $nip = $this->input->post('nip');
        $tempat_lahir_guru = $this->input->post('tempat_lahir_guru');
        $tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
        $no_hp_guru = $this->input->post('no_hp_guru');

        // insert data to database
        $data = [
            'bid_lomba' => $bid_lomba,
            'asal_sekolah' => $asal_sekolah,
            'nama_siswa' => $nama_siswa,
            'jk_siswa' => $jk_siswa,
            'nisn' => $nisn,
            'tempat_lahir_siswa' => $tempat_lahir_siswa,
            'tgl_lahir_siswa' => $tgl_lahir_siswa,
            'no_hp_siswa' => $no_hp_siswa,
            'nama_guru' => $nama_guru,
            'jk_guru' => $jk_guru,
            'nip' => $nip,
            'tempat_lahir_guru' => $tempat_lahir_guru,
            'tgl_lahir_guru' => $tgl_lahir_guru,
            'no_hp_guru' => $no_hp_guru,
        ];

        if ($_FILES['file_bukti']['name'] !== $currData[0]['file_bukti']) {
            $data['file_bukti'] = $this->upload_pdf()['file_name'];
            
            unlink('assets/uploads/' . $currData[0]['file_bukti']);
        }

        $registeration = $this->model->update('registrations', $id, 'id_reg', $data);
        if (!$registeration) {
            $this->session->set_flashdata('error', 'error update data, please try again next time');
            redirect('/dashboard/data-pendaftar/' . $id);
        }

        redirect('/dashboard/data-pendaftar');
    }

    public function delete($id) {
        if ($this->input->post('_method') !== "DELETE") {
            $this->session->set_flashdata("error", "Cannot handle method");
            redirect("/dashboard/data-pendaftar");
        }

        // delete data
        $delete = $this->model->delete("registrations", "id_reg", $id);
        if(!$delete) {
            $this->session->set_flashdata("error", "unable to delete this data, try again later");
            redirect("/dashboard/data-pendaftar");
        }

        $this->session->set_flashdata("success", "data deleted successfully");
        redirect('/dashboard/data-pendaftar');
    }

    public function confirm($id) {
        if ($this->input->post("_method") !== "POST" || $this->model->current_user()->status !== '2') {
            $this->session->set_flashdata("error", "cannot handle method");
            redirect('/');
        }

        // check is data exists
        $data = $this->model->where('registrations', 'id_reg', $id)->get()->result_array();
        if (!$data) {
            $this->session->set_flashdata("error", "cannot find data");
            redirect('/dashboard/data-pendaftar');
        }

        // update data
        $data = ['validasi' => 2];
        $updated = $this->model->update('registrations', $id, 'id_reg', $data);
        if (!$updated) {
            $this->session->set_flashdata('error', 'cannot update data, please try again later');
            redirect('/dashboard/data-pendaftar');
        }

        // redirect
        $this->session->set_flashdata("success", "data confirmed successfully");
        redirect('/dashboard/data-pendaftar');  
    }

    public function generatePDF(){

    }

    private function upload_pdf() {
        // File upload setup
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['max_size'] = 2048;
        $config['file_name'] = $_FILES['file_bukti']['name'];

        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('file_bukti')) {
            // var_dump($this->upload->display_errors());
            // die();
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('/registrasi');
        }

        return $this->upload->data();
    }

}