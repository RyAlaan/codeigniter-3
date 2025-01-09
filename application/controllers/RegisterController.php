<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        if (!$this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }

        $data['bidang_lombas'] = $this->model->get_all('bidang_lombas')->result();

        $this->load->view('layout/user/header');
        $this->load->view('page/private/register/index', $data);
        $this->load->view('layout/user/footer');
    }

    public function create(){
        if (!$this->session->has_userdata('id')) {
            redirect(base_url('/'));
        }

        $data['pesertas'] = $this->model->paginate('registrations', '1', '25');

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
        $this->form_validation->set_rules('file_bukti', 'File bukti', 'required|mime_in[file_bukti,application/pdf]');
    
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
    
        // File upload setup
        $config['upload_path'] = base_url() .'/assets/uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('file_bukti')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('/registrasi');
        }
    
        $uploaded_data = $this->upload->data();
    
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
    
        $this->load->model('Registration_model');
        $registration = $this->Registration_model->insert('registrations', $data);
    
        if (!$registration) {
            $this->session->set_flashdata('error', 'An error occurred during registration. Please try again.');
            redirect('/registrasi');
        }
    
        // return
        $this->session->set_flashdata('success', 'Registration successful.');
        redirect('/');
    }
}