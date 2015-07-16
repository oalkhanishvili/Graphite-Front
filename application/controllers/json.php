<?php
class json extends  CI_Controller
{

    public function peaceofart()
    {
        $this->load->model('forjson');
        $result=$this->forjson->join();
        print_r($result);
    }

}