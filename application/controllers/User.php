<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login/index"));
		}
	}

	function index(){
		$this->load->view('home');
	}
}