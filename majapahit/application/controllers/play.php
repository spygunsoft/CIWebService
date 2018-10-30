<?php if(! defined("BASEPATH"))exit("No direct script access allowed");

class Play extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."#login");
		}
	}
	
	public function index(){
		
		$this->load->view('play');
	}
	
	public function engine_url(){
			
		return "http://localhost/mfg/";
	}
	
	public function log_out(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	public function top_panel_resources(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."resources/player_village_resources";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function farm_amounts(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$building = "farm";
		
		$data = array("idvillage"=>$idvillage,"building"=>$building);
		
		$curl_address = $this->engine_url()."buildings/player_village_building_amounts";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function lumber_camp_amounts(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$building = "lumber_camp";
		
		$data = array("idvillage"=>$idvillage,"building"=>$building);
		
		$curl_address = $this->engine_url()."buildings/player_village_building_amounts";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function mining_camp_amounts(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$building = "mining_camp";
		
		$data = array("idvillage"=>$idvillage,"building"=>$building);
		
		$curl_address = $this->engine_url()."buildings/player_village_building_amounts";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function food_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$resource_type = "food";
		$limit = 10;
		
		$data = array("idvillage"=>$idvillage,"resource_type"=>$resource_type,"limit"=>$limit);
		
		$curl_address = $this->engine_url()."resources/player_village_resource_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function wood_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$resource_type = "wood";
		$limit = 10;
		
		$data = array("idvillage"=>$idvillage,"resource_type"=>$resource_type,"limit"=>$limit);
		
		$curl_address = $this->engine_url()."resources/player_village_resource_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function gold_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$resource_type = "gold";
		$limit = 10;
		
		$data = array("idvillage"=>$idvillage,"resource_type"=>$resource_type,"limit"=>$limit);
		
		$curl_address = $this->engine_url()."resources/player_village_resource_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function war_loot_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."resources/player_war_loot_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_war_loot_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."resources/player_count_war_loot_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function troop_attack_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_troop_attack_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_troop_attack_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_count_troop_attack_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function enemy_attack_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_enemy_attack_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_enemy_attack_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_count_enemy_attack_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function troop_back_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_troop_back_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_troop_back_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_count_troop_back_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function building_prices(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."buildings/player_building_prices";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function village_building_build_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."buildings/player_village_building_build_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_village_building_build_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."buildings/player_count_village_building_build_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function order_building(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$building = $this->input->post("building");
		
		$data = array("idvillage"=>$idvillage,"building"=>$building);
		
		$curl_address = $this->engine_url()."buildings/player_order_building";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function troop_prices(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_troop_prices";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function troop_stats(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_troop_stats";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function village_troop_build_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_village_troop_build_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function count_village_troop_build_schedules(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_count_village_troop_build_schedules";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function order_troop(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$troop = $this->input->post("troop");
		
		$data = array("idvillage"=>$idvillage,"troop"=>$troop);
		
		$curl_address = $this->engine_url()."troops/player_order_troop";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function village_ranking(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."villages/player_village_ranking";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function villages_rankings(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."villages/player_villages_rankings";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function villages_locations(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."villages/player_villages_locations";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function target_village(){
		
		$idvillage = $this->session->userdata("id_active_village");
		$targetvillage = $this->input->get("term");
		
		$data = array("idvillage"=>$idvillage,"targetvillage"=>$targetvillage);
		
		$curl_address = $this->engine_url()."villages/player_village_location";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		$this->output->set_content_type("application/json")->set_output($response);
		flush();	
	}
	
	public function villages_troops(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		
		$data = array("idvillage"=>$idvillage);
		
		$curl_address = $this->engine_url()."troops/player_villages_troops";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
	
	public function order_attack(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		$idvillage = $this->session->userdata("id_active_village");
		$troop = $this->input->post("troop");
		$target_village = $this->input->post("target_village");
		
		$data = array("idvillage"=>$idvillage,"troop"=>$troop,"target_village"=>$target_village);
		
		$curl_address = $this->engine_url()."troops/player_order_attack";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = $output;
				
		echo "data: ".$response."\n\n";
		flush();	
	}
}