<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    // get where
    public function where(string $table, array $data) {
        return $this->db->get_where($table, $data);
    }

    // get all data
    public function get_all(string $table){
        return $this->db->get($table)->result();
    }

    // get by id
    public function get_by_id(string $table, $id){
        return $this->db->get_where($table, ['id' => $id])->row();
    }

    // insert data
    public function insert(string $table, array $data){
        return $this->db->insert($table, $data);
    }

    // update data
    public function update(string $table,  $id, array $data) {
        return $this->db->update($table, $data, ['id'=>$id]);
    }

    // delete data
    public function delete(string $table, $id){
        return $this->db->delete($table, $id);
    }
}