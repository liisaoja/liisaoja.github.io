<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all(){
        // $sql = "select * from member order by last_name";
        // $query = $this->db->query($sql);
        // return $query->result_array();
        
        $this->db->order_by("last_name", "ASC");
        return $this->db->get("member")->result_array();
    }
    
    
}
