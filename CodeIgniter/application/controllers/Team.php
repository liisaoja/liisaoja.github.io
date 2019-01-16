<!--kokeilin saisinko toimimaan kuten member_model + member-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('team_model');
        $this->load->helper('url_helper');
        
    }
    
    public function index(){
        $data['team'] = $this->team_model->get_all();
        $data['title'] = "All teams";
        
        // print_r($data);
        
        $this->load->view("templates/header");
        $this->load->view("pages/index", $data);
        $this->load->view("templates/footer");
    }
}