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
/*	Default Controller map
	მთავარი გვერდი.გამომგვიტანს რუკას,მონიშნულ ადგილებს,სლაიდერს*/
	public function index(){
		$list = $this->show_markers->select_markers();
		foreach ( $list as $items ){
			$marker = array();
			$marker['position'] = $items['latitude'].','.$items['longitude'];
			$html  = "<div class='marker'><h2>{$items['title']}</h1>";
			$html .= "<a href='#' data-class='modal' data-id='{$items['id']}' class='marker_id'>";
			$html .= "<p data-toggle='modal' data-target='#gridSystemModal'>";
			$html .= "<img src=".base_url('assets/img/'.$items['pic_name'])." height=150px></p></a>";
			$html .= "<p>{$items['description']}</p></div>";
			$html .= "<p ></p></div>";
			$marker['infowindow_content'] = $html;
				if ( $items['category_id'] == 2 ){
				$marker['icon'] = base_url('img/marker.png');
				}
			$marker['animation'] = 'DROP';
			$marker['draggable'] = FALSE;
			$this->googlemaps->add_marker($marker);
		}
		$result = $this->show_markers->select_user_wishlist();
		$data['map'] = $this->googlemaps->create_map();

		// ვტვირთავთ facebook login ბიბლიოთეკას.და ვაკეთებთ ავტორიზაციას
		$this->load->library('facebook');
		$user = $this->facebook->getUser();
		if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
                $id = $data['user_profile']['id'];
                if ( !$this->show_markers->add_user($data['user_profile']['id']) == true ){
	        	$data1 = array(
	        	'name' => $data['user_profile']['name'],
	        	'fb_id' => $data['user_profile']['id']
	        	);
	        	$this->db->insert('user', $data1);
        }
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
        if ($user) {
            $data['logout_url'] = site_url('map/logout');
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url(''),
                'scope' => array("email") // permissions here
            ));
        }
		$data['wishlist'] = $result;
		$data['result'] = $list;
		$this->load->view('header');
		$this->load->view('view_home', $data);
		$this->load->view('footer');
	}
	public function logout(){
        $this->load->library('facebook');
        $this->facebook->destroySession();
        redirect('');
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
		$this->session->set_flashdata('success', 'წარმატებით აიტვირთა');
		redirect('map/insert_mark');
		}
		$config['zoom'] = '13';
		$config['onclick'] = "placeMarker(event.latLng);$('#lat_id').val(event.latLng.lat()); $('#lng_id').val(event.latLng.lng());";
		$this->googlemaps->initialize($config);
		$marker['position'] = '41.699833, 44.803448';

		$data['map'] = $this->googlemaps->create_map();
		$data['category'] = $this->show_markers->select_category();
		$this->load->view('header');
		$this->load->view('insert_marker', $data);
		$this->load->view('footer');
	}

	/*დეტალური გვერდისთვის AJAX იღბს მონაცემებს და ისვრის უკან*/
	public function detail_page(){
		$title = $_POST['title'];
		$result['ajax'] = $this->show_markers->select_detail_page($title);
		echo json_encode($result['ajax']);
	}
	public function add_like(){
		$data = $_POST['like'];
		$id = array( 'user_id' => $_POST['user_id']);
		echo $this->show_markers->add_like($data, $id);
	}
}
