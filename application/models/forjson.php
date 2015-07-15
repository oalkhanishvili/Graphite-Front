<?php
class forjson extends CI_Model
{
    public function join()
    {
        $this->db->select('*');
        $this->db->from('peaceofart');
        $this->db->join('user','peaceofart.user_id=user.id');
        $this->db->join('category','peaceofart.category_id=category.id');
        $querry= $this->db->get();
        $result=array();
        $x=0;
        foreach($querry->result_array() as $row)
        {
            $result[$x]=$row;
            $result[$x]['pic_url']='http://176.28.22.210/peaceofart/assets/img/'.$row['pic_name'];
            $result[$x]['profimg_url']='http://176.28.22.210/peaceofart/assets/user_img/'.$row['prof_img'];
            $x++;
        }
        return json_encode($result);

    }

}