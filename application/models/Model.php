<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    // get where
    public function where($table, $field, $data) {
        return $this->db->from($table)->where($field, $data);
    }

    // count data
    public function count($table){
        return $this->db->from($table)->count_all_results();
    }
    
    // get all data
    public function get_all($table){
        return $this->db->get($table);
    }

    // paginate data
    public function paginate($table, $currPage, $limit){
        return $this->db->paginate()
    }
    
    // get by id
    public function get_by_id($table, $id){
        return $this->db->from($table)->where($id, $data);
    }

    // insert data
    public function insert($table, $data){
        return $this->db->insert($table, $data);
    }

    // update data
    public function update($table, $id, $data) {
        return $this->db->update($table, $data, ['id'=>$id]);
    }

    // delete data
    public function delete($table, $id){
        return $this->db->delete($table, $id);
    }

    // get current user data
    public function current_user() {
        $user_id = $this->session->has_userdata('id');

        if (!$user_id) {
            return NULL;
        }

        $user = $this->db->get_where('users', ['id_user' => $user_id]);
        return $user->row();
    }
}