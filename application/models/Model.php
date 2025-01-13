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

    // relation data
    public function relation($select, $pTable, $pk, $fTable, $fk){
        return $this->db->select($select)->join($fTable, $pTable . '.' . $fk . '=' . $fTable . '.' . $pk)->from($pTable)->get();
    }
    
    // get all data
    public function get_all($table, $offset = null, $limit = null) {
        return $this->db->get($table, $offset, $limit);
    }
    
    // get by id
    public function relation_by_id($select, $pTable, $pk, $fTable, $fk, $field, $value){
       return $this->db->select($select)->join($fTable, $pTable . '.' . $fk . '=' . $fTable . '.' . $pk)->from($pTable)->where($field, $value);
    }

    // insert data
    public function insert($table, $data){
        return $this->db->insert($table, $data);
    }

    // update data
    public function update($table, $id, $pk, $data) {
        return $this->db->update($table, $data, [$pk => $id]);
    }
    
    // delete data
    public function delete($table, $pk, $id) {
        return $this->db->delete($table, [$pk => $id]);
    }

    // get current user data
    public function current_user() {
        $user_id = $this->session->userdata('id');

        if (!$user_id) {
            return NULL;
        }

        $user = $this->where('users', 'id_user', $user_id);
        return $user->get()->row();
    }
}