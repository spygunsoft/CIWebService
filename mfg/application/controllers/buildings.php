<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Buildings extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("buildings_model");
	}
	
	public function index(){
		redirect(base_url());
	}
	
	public function player_village_building_amounts(){	
		$idvillage = $this->input->post("idvillage");
		$building = $this->input->post("building");
		$building_amounts = $this->buildings_model->village_building_amounts($idvillage,$building);
		$this->output->set_content_type("application/json")->set_output(json_encode($building_amounts));		
	}
	
	public function player_building_prices(){
		$building_prices = $this->buildings_model->building_prices();
		$this->output->set_content_type("application/json")->set_output(json_encode($building_prices));
	}
	
	public function player_village_building_build_schedules(){
		$idvillage = $this->input->post("idvillage");
		$village_building_build_schedules = $this->buildings_model->village_building_build_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($village_building_build_schedules));
	}
	
	public function player_count_village_building_build_schedules(){
		$idvillage = $this->input->post("idvillage");
		$count_village_building_build_schedules = $this->buildings_model->count_village_building_build_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($count_village_building_build_schedules));
	}
	
	public function player_order_building(){
		$idvillage = $this->input->post("idvillage");
		$building = $this->input->post("building");
		$order_building = $this->buildings_model->order_building($idvillage,$building);
	}
}