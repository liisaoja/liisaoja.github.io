<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_model extends CI_model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all(){
        $this->db->order_by("team_name", "ASC");
        return $this->db->get("team")->result_array();
    }
    
    public function get_team($id = NULL){
        if($id = NULL) {
            return NULL;
        }
        
        $this->db->where("id", $id);
        return $this->db->get("team")->row_array();
    }
}