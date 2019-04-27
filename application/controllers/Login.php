<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');

	}

	function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('foot');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("User",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("Tubes/index"));

		}else{
			$this->session->set_flashdata('messages', 'username atau password salah');

			redirect(base_url("Login/index"));
		}

	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
    

    
}