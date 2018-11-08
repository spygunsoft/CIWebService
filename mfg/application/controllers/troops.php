<?php if( !defined("BASEPATH"))exit("No direct script access allowed");

class Troops extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model("troops_model");
	}
	
	public function index(){
		redirect(base_url());
	}
		
	public function player_troop_attack_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->troop_attack_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_count_troop_attack_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->count_troop_attack_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_enemy_attack_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->enemy_attack_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_count_enemy_attack_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->count_enemy_attack_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_troop_back_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->troop_back_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_count_troop_back_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->count_troop_back_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_troop_prices(){
		$troop_prices = $this->troops_model->troop_prices();
		$this->output->set_content_type("application/json")->set_output(json_encode($troop_prices));
	}
	
	public function player_troop_stats(){
		$troop_prices = $this->troops_model->troop_stats();
		$this->output->set_content_type("application/json")->set_output(json_encode($troop_prices));
	}
	
	public function player_village_troop_build_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->village_troop_build_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_count_village_troop_build_schedules(){
		$idvillage=$this->input->post("idvillage");
		$schedules = $this->troops_model->count_village_troop_build_schedules($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($schedules));
	}
	
	public function player_order_troop(){
		$idvillage=$this->input->post("idvillage");
		$troop=$this->input->post("troop"); 
		$order = $this->troops_model->order_troop($idvillage,$troop);
		$this->output->set_content_type("application/json")->set_output(json_encode($order));
	}
	
	public function player_order_attack(){
		$idvillage=$this->input->post("idvillage");
		$troop=$this->input->post("troop");
		$target_village=$this->input->post("target_village"); 
		$order = $this->troops_model->order_attack($idvillage,$troop,$target_village);
		$this->output->set_content_type("application/json")->set_output(json_encode($order));
	}
	
	public function player_villages_troops(){
		$idvillage=$this->input->post("idvillage");
		$villages_troops = $this->troops_model->villages_troops($idvillage);
		$this->output->set_content_type("application/json")->set_output(json_encode($villages_troops));
	}

}