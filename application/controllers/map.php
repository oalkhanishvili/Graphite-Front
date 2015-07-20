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
		$this->load->model('show_markers');
	}
	public function index(){
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
		$config['upload_path']          = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

        $this->load->library('upload', $config);
        if ( !$this->upload->do_upload() ) {
        	$error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
            $imageName = $data['upload_data']['file_name'];
            print_r($data['upload_data']['file_name']);
        }
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' || !empty($imageName)){
		$data1 = array(
			'user_id' => $this->input->post('user_id'),
			'category_id' => $this->input->post('category_id'),
			'pic_name' => $imageName,
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'longitude' => $this->input->post('longitude'),
			'latitude' => $this->input->post('latitude'),
			);
		$this->load->model('show_markers');
		$this->show_markers->insert_markers($data1);
		redirect('map/insert_mark');
		}
		$config['zoom'] = '13';
		$this->googlemaps->initialize($config);
		$marker['position'] = '41.699833, 44.803448';
		$marker['draggable'] = true;
		$marker['ondragend'] = "$('#lat_id').val(event.latLng.lat()); $('#lng_id').val(event.latLng.lng());";
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$data['category'] = $this->show_markers->select_category();
		$this->session->set_flashdata('success', 'წარმატებით აიტვირთა');
		$this->load->view('insert_marker', $data);
	}
}