<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class map extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->library('googlemaps');

		$config['center'] = '41.699833, 44.803448';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$this->load->model('show_markers');
		$list = $this->show_markers->select_markers();

		foreach ( $list as $items ){
			$marker = array();
			$marker['position'] = $items['longitude'].','.$items['latitude'];
			$marker['infowindow_content'] = $items['title'];
			$marker['animation'] = 'DROP';
			$this->googlemaps->add_marker($marker);
		}

		// $marker = array();
		// $marker['position'] = '41.693168, 44.797268';
		// $marker['infowindow_content'] = '1 - Hello World!';
		// $marker['animation'] = 'DROP';
		// $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		// $this->googlemaps->add_marker($marker);

		// $marker = array();
		// $marker['position'] = '41.686758, 44.810143';
		// $marker['draggable'] = TRUE;
		// $marker['animation'] = 'DROP';
		// $this->googlemaps->add_marker($marker);

		// $marker = array();
		// $marker['position'] = '41.693681, 44.820614';
		// $marker['onclick'] = 'alert("You just clicked me!!")';
		// $marker['animation'] = 'DROP';
		// $this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('view_home', $data);

	}

	public function insert_mark(){
		$this->load->library('googlemaps');

		$config['center'] = '41.699833, 44.803448';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

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