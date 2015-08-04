<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class show_markers extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	/**
	 * [select_markers ბაზიდან მოგვაქვს ყველა მარკერი]
	 * @return [array] [$result]
	 */
	public function select_markers(){
		$this->db->select('*');
		$this->db->from('peaceofart');
		// $this->db->where('user_id', 11); 
		$query = $this->db->get();

		foreach ( $query->result_array() as $row ){
			$result[] = $row;
		}
		return $result;
	}
	/**
	 * [insert_markers ამატებს მარკერს დამატების გვერდიდან ბაზაში]
	 * @param  [array] $data [მასივი POST მეთოდიდან]
	 */
	public function insert_markers($data){
		$this->db->insert('peaceofart' ,$data);
	}
	/**
	 * [select_category ბაზიდან მოგვაქვს ყველა კატეგორია]
	 * @return [array] [$result]
	 */
	public function select_category(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();

		foreach ( $query->result_array() as $row ) {
			$result[] = $row;
		}
		return $result;
	}
	/**
	 * [select_user_wishlist ბაზიდან მოგვაქვს ყველა მოწონებული ნიშნულები კონკრეტული უზერისთვის]
	 * @param  [numeric] $id [მომხმარებელის id]
	 * @return [array] [$result]
	 */
	public function select_user_wishlist(){
		$this->db->select('*');
		// $this->db->where('like.user_id', $_SESSION['fb_801390733309537_user_id']);
		$this->db->from('like');
		$this->db->join('peaceofart', 'like.user_id=peaceofart.id');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			foreach ( $query->result_array() as $row ){
				$result[] = $row;
			}
			return $result;
		}
		return false;
	}
	/**
	 * [add_user მომხმარებლის დამატება ბაზაში facebook u_id მიხედვით]
	 * @param [numeric] $id [facebook-ზე უნიკალური user id]
	 */
	public function add_user($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('fb_id', $id);
		$query = $this->db->get();
		if ( $query->num_rows()>0 ) {
			return true;
		}
		return false;
	}
	/**
	 * [select_detail_page დეტალური pop-up გვერდი კონკრეტული მარკერისთვის]
	 * @param  [numeric] $id [მომხმარებლის id]
	 * @return [array]     [$result]
	 */
	public function select_detail_page($id){
		$this->db->select('*');
		$this->db->from('peaceofart');
		$this->db->where('id' , $id);
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			$result = $query->row_array();
			return $result;
		}
		return false;
	}
	/**
	 * [add_like მოწონებების დამატება მარკერებზე]
	 * ვამოწმებთ ჯერ თუ აქვს მომხმარებელს მოწონებული მარკერი
	 * თუ არააქვს ვამახსოვრებთ ბაზაში.კონტაქტი ხდება ajax-ით
	 * @param [string] $data [description]
	 * @param [] $id   []
	 */
	public function add_like($data, $id){
		//ვამოწმებთ აქვს თუ არა მოწონებული
		$this->db->select('user_id');
		$this->db->from('like');
		$this->db->where('marker_id', $id['marker_id']);
		$this->db->where('user_id', $_SESSION['fb_801390733309537_user_id']);
		$query = $this->db->get();
		// თუ ჩანაწერი მოიძებნა return false
		if ( $query->num_rows() > 0 ){
			return false;
		//თუ ჩანაწერი არ მოიძებნა მაშინ გავაკეთოთ ჩანაწერები
		}else{
			$this->db->where('id', $id['marker_id']);
			$this->db->set('like', $data);
			$this->db->update('peaceofart');

			$this->db->insert('like',$id);
			return 'ok';
		}
	}
}