<?php
class insert extends CI_Controller
{
    public function add()
    {
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

        }
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' || !empty($imageName))
        {
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
            $this->show_markers->insert_markers($data1); ?>
            <script> alert("?????????? ???????")
            </script><?php
            redirect('map/insert_mark');
        }

      }
}