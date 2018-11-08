<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_validation extends CI_Controller {
	
	
	public function __construct(){
		
		parent::__construct();		
		$this->load->model("form_validation_model");
	}	
	
	public function index(){
		
		redirect(base_url());
	}
	
	public function username_availability(){
		$username = $this->input->post("username");
		$availability = $this->form_validation_model->username_availability($username);
		$this->output->set_content_type("application/json")->set_output(json_encode($availability));
		
	}
	
}