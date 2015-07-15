<?php
class json extends  CI_Controller
{

    public function peaceoefart()
    {
        $this->load->model('forjson');
        $result=$this->forjson->join();
        print_r($result);
    }

}