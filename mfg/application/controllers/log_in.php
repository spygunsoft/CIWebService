<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Log_in extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("log_in_model");
	}
	
	public function index(){
		redirect(base_url());
	}
	
	public function player_log_in(){
	
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$status = $this->log_in_model->log_in($username,$password);
		$this->output->set_content_type("application/json")->set_output(json_encode($status));
		
	}

}