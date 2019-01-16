<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('member_model');
        $this->load->helper('url_helper');
        
    }
    
    public function index(){
        $data['member'] = $this->member_model->get_all();
        $data['title'] = "All members";
        
        // print_r($data);
        
        $this->load->view("templates/header");
        $this->load->view("pages/index", $data);
        $this->load->view("templates/footer");
    }
}