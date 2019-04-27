<?php 

class Register extends CI_Controller{

	function __construct(){
		parent::__construct();		
		

	}

	function index(){
		$this->load->view('header');
		$this->load->view('daftar');
		$this->load->view('foot');
	}
}