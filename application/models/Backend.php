<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_model {
    
    
    
    public function registerdonar($donardata)
    {
        $this->load->database();
        return $this->db->insert("registereddonars",$donardata);

    }
    
    
    public function registereddonars()
    {
        $this->load->database();
        $query=$this->db->query("select * from registereddonars where status='Donated'");
        $data = $query->result();
        return $data;

    }
    
    
    public function sitecontent()
    {
        $this->load->database();
        $query=$this->db->query("SELECT * FROM sitedata");
        $result=$query->result();
        //foreach($result as $sitecontent);
        return $result;
    }

    
    public function slider()
    {
        $this->load->database();
        $query=$this->db->query("SELECT * FROM `slider`");
        return $query->result();
    }
    
    
    public function events()
    {
        $this->load->database();
        $query=$this->db->query("SELECT * FROM `events` ORDER BY `date` DESC");
        return $query->result();
    }

}
