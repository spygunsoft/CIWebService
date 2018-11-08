<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Sign_up extends CI_controller{
	
	public function __construct(){
		
		parent::__construct();		
		$this->load->model("sign_up_model");
	}	
	
	public function index(){
		
		redirect(base_url());
	}
	
	public function player_sign_up(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$password_conf = $this->input->post("password_conf");
		$status = $this->sign_up_model->sign_up($username,$password,$password_conf);
		$this->output->set_content_type("application/json")->set_output(json_encode($status));
		
	}

}