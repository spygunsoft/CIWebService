<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('home');	
	}
	
	public function engine_url(){
			
		return "http://localhost/mfg/";
	}
	
	public function username_validation()
	{
		$this->form_validation->set_rules("username","Username","required|min_length[7]|callback_username_availability");
		$this->form_validation->set_message("required","Username Tidak Boleh Kosong");
		$this->form_validation->set_message("min_length","Masukkan Minimal 7 Karakter");
		
		if($this->form_validation->run() == FALSE)
		{
			$availability = array("status" => "error","message" => form_error("username"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
			//echo json_encode(array("status" => "error","message" => form_error("username")));
		}
		else
		{
			$availability = array("status" => "success","message" => form_error("username"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
			//echo json_encode(array("status" => "success","message" => form_error("username")));
		}
	}
	
	public function password_validation()
	{
		$this->form_validation->set_rules("password","Password","required|min_length[5]");
		$this->form_validation->set_message("required","Password Tidak Boleh Kosong");
		$this->form_validation->set_message("min_length","Masukkan Minimal 5 Karakter");
		
		if($this->form_validation->run() == FALSE)
		{
			$availability = array("status" => "error","message" => form_error("password"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
		}
		else
		{
			$availability = array("status" => "success","message" => form_error("password"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
		}
	}
	
	public function password_conf_validation()
	{
		$this->form_validation->set_rules("password_conf","Password_conf","required|min_length[5]|matches[password]");
		$this->form_validation->set_message("required","Confirm Password Tidak Boleh Kosong");
		$this->form_validation->set_message("min_length","Masukkan Minimal 5 Karakter");
		$this->form_validation->set_message("matches","Tidak Sama Dengan Isi Password");
		
		if($this->form_validation->run() == FALSE)
		{
			$availability = array("status" => "error","message" => form_error("password_conf"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
		}
		else
		{
			$availability = array("status" => "success","message" => form_error("password_conf"));
			$this->output->set_content_type("application/json")->set_output(json_encode($availability));
		}
	}
	
	public function username_availability($username)
	{		
		$data = array("username"=>$username);
		$curl_address = $this->engine_url()."form_validation/username_availability";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
				
		$response = json_decode($output,TRUE);
		
		$availability = $response[0]["availability"];
		
		if($availability == "no")
		{
			$this->form_validation->set_message("username_availability","username ".$username." sudah terpakai");
			return FALSE;
		}else
		{
			return TRUE;
		}
	}
	
	public function sign_up()
	{
		$this->form_validation->set_rules("username","Username","required|min_length[7]");
		$this->form_validation->set_rules("password","Password","required|min_length[5]");
		$this->form_validation->set_rules("password_conf","Password_conf","required|min_length[5]|matches[password]");
		
		if($this->form_validation->run() == TRUE)
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$password_conf = $this->input->post("password_conf");
			
			$data = array("username"=>$username,"password"=>$password,"password_conf"=>$password_conf);
		
			$curl_address = $this->engine_url()."sign_up/player_sign_up";
		
			$ch = curl_init();
		
			curl_setopt($ch,CURLOPT_URL,$curl_address);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
			$output = curl_exec($ch);
		
			curl_close($ch);
		
			$response = json_decode($output,TRUE);
		
			$status = $response[0]["status"];
		
			if($status == "success")
			{
				$sign_up_status = array("status" => "success");
				$this->output->set_content_type("application/json")->set_output(json_encode($sign_up_status));
			}
		}
	}
	
	public function log_in(){
		
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$data = array("username"=>$username,"password"=>$password);
		
		$curl_address = $this->engine_url()."log_in/player_log_in";
		
		$ch = curl_init();
		
		curl_setopt($ch,CURLOPT_URL,$curl_address);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		$response = json_decode($output,TRUE);
		
		$status = $response[0]["status"];
		
		if($status == "success")
		{
			$data = array("username"=>$username);
		
			$curl_address = $this->engine_url()."villages/player_default_active_village";
		
			$ch = curl_init();
		
			curl_setopt($ch,CURLOPT_URL,$curl_address);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		
			$output = curl_exec($ch);
		
			curl_close($ch);
			
			$response = json_decode($output,TRUE);
		
			$idvillage = $response[0]["idvillage"];
			
			$login_data = array("username"=>$username,"id_active_village"=>$idvillage);
			$this->session->set_userdata($login_data);
		}
		else
		{
			$sign_up_status = array("status" => "error");
			$this->output->set_content_type("application/json")->set_output(json_encode($sign_up_status));
		}
	}
}
