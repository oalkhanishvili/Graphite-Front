<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class map extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('googlemaps');

		$config['center'] = '41.699833, 44.803448';
		$config['zoom'] = 'auto';
		$config['disableMapTypeControl'] = TRUE;
		$this->googlemaps->initialize($config);

	}
	public function index(){

		$this->load->model('show_markers');
		$list = $this->show_markers->select_markers();

		foreach ( $list as $items ){
			$marker = array();
			$marker['position'] = $items['latitude'].','.$items['longitude'];
			$html  = "<div class='marker'><h2>{$items['title']}</h1>";
			$html .= "<p data-toggle='modal' data-target='#myModal'><img src=".base_url('img/'.$items['pic_name'])." height=150px></p>";
			$html .= "<p>{$items['description']}</p></div>";
			$html .= "<p ><i class='fa fa-search-plus fa-md'></p></div>";//a href=".site_url('map/detail_page/'.$items['id']).">დეტალური გვერდი</a>
			$marker['infowindow_content'] = $html;
			if ( $items['category_id'] == 2 ){
			$marker['icon'] = base_url('img/marker.png');
			}
			$marker['animation'] = 'DROP';
			$marker['draggable'] = FALSE;
			$this->googlemaps->add_marker($marker);
		}

		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('view_home', $data);

	}
	public function detail_page($id){
		$this->load->model('show_markers');
		$result = $this->show_markers->detail_page($id);

		$data['detail_page'] = $result;
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('detail_page', $data);
	}
	public function insert_mark(){

		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'category_id' => $this->input->post('category_id'),
			'pic_name' => $this->input->post('pic_name'),
			'title' => $this->input->post('title'),
			'longitude' => $this->input->post('longitude'),
			'latitude' => $this->input->post('latitude'),
			);
		$this->load->model('show_markers');
		$this->show_markers->insert_markers($data);
		}
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('insert_marker', $data);
	}
}