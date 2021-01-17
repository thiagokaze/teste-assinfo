<?php

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function list_user() {
      return $this->db->get('usuarios')->result();
    }

    public function create_user($data) {
        return $this->db->insert('usuarios', $data);
    }

    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('usuarios');
    }

    public function update_user($id,$dados){
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $dados);
    }

    public function find_user($id){
        $this->db->where('id',$id);
        return $this->db->get('usuarios')->result();
    }
    
}
