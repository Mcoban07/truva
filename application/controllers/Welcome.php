<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){
		header("Content-Type:application/json");
		$identity = $_POST["identity"];
		$password = $_POST["password"];
		$data = array("identity" => $identity, "password" => $password,"ip_address"=>$this->input->ip_address());
		$data_string = json_encode($data); 
		$ch = curl_init(API_ENDPOINT.'token/login');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
		);                                                                                                                   
		                                                                                                                     
		$response = curl_exec($ch);
		$response = json_decode($response);
		if($response->result == 200){
			$data = array(
			        'token'  => $response->token,
			        'identity' =>$identity,
			        'group' =>$response->group
			);
			$this->session->set_userdata($data);
			$result["success"] = true;
		}else{
			$result["success"] = false;
		}
		echo json_encode($result);
	}
	public function forgotPasswordCheck(){
		header("Content-Type:application/json");
		$email = $_POST["email"];
		$data = array("email" => $email);
		$data_string = json_encode($data);
		$ch = curl_init(API_ENDPOINT.'token/forgot_password');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
		);                                                                                                                   
		                                                                                                                     
		$response = curl_exec($ch);
		$response = json_decode($response);
		if($response->result == 200){
			$result["success"] = true;
		}else{
			$result["success"] = false;
		}
		echo json_encode($result);
	}

	public function forgotPassword()
	{
		$this->load->view('forgotPassword');
	}

	public function changePassword()
	{
		$this->load->view('changePassword');
	}
	/*public function getAlcoholBrandByAlcoholType(){
		$token = $this->session->userdata("token");
		$ch = curl_init(API_ENDPOINT.'alcoholbrand/getAlcoholBrandByAlcoholType');                                                                
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',
		    'token:'.$token.'',
		    'identity:admin@admin.com')                                                                       
		);                                                                                         
		$response = curl_exec($ch);
		print_r($response);
	}*/
}
