<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Resources extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("resources_model");
	}
	
	public function index(){
		redirect(base_url());
	}
	
	public function player_village_resources(){	
		$idvillage = $this->input->post("idvillage");
		$resources = $this->resources_model->village_resources($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($resources));		
	}
	
	public function player_village_resource_schedules(){
		$idvillage=$this->input->post("idvillage");
		$resource_type=$this->input->post("resource_type");
		$limit=$this->input->post("limit");
		$schedules = $this->resources_model->village_resource_schedules($idvillage,$resource_type,$limit);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_war_loot_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->resources_model->war_loot_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_count_war_loot_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->resources_model->count_war_loot_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}

}