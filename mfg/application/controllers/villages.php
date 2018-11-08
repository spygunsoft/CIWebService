<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Villages extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("villages_model");
	}
	
	public function index(){
		redirect(base_url());
	}
	
	public function player_default_active_village(){
	
		$username = $this->input->post("username");
		$idvillage = $this->villages_model->default_active_village($username);
		$this->output->set_content_type("application/json")->set_output(json_encode($idvillage));
		
	}
	
	public function player_village_ranking(){
		
		$idvillage = $this->input->post("idvillage");
		$village_ranking = $this->villages_model->village_ranking($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($village_ranking));
	}
	
	public function player_villages_rankings(){
		
		$villages_rankings = $this->villages_model->villages_rankings();
		$this->output->set_content_type("application/json")->set_output(json_encode($villages_rankings));
	}
	
	public function player_villages_locations(){
		$idvillage = $this->input->post("idvillage");
		$villages_locations = $this->villages_model->villages_locations($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($villages_locations));
	}
	
	public function player_village_location(){
		$idvillage = $this->input->post("idvillage");
		$targetvillage = $this->input->post("targetvillage");
		$villages_locations = $this->villages_model->village_location($idvillage,$targetvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($villages_locations));
	}

}