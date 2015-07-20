<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class show_markers extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function select_markers(){
		$this->db->select('*');
		$this->db->from('peaceofart');
		$query = $this->db->get();

		foreach ( $query->result_array() as $row ){
			$result[] = $row;
		}
		return $result;
	}
	public function detail_page($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('peaceofart');
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
	public function insert_markers($data){
		$this->db->insert('peaceofart' ,$data);
	}
	public function select_category(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();

		foreach ( $query->result_array() as $row ) {
			$result[] = $row;
		}
		return $result;
	}
}