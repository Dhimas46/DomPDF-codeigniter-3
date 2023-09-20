<?php


class M_users extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	

	public function get_users(){
		$query = $this->db->get('users');
		return $query->first_row();
	}

	public function get_user($id){
		$query = $this->db->get_where('users', array('id' => $id));
		return $query->row();
	}

	public function insert_user($data){
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function update_user($id, $data){
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}

	public function delete_user($id){
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
}
