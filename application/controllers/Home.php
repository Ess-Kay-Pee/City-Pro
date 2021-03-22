<?php

class Home extends CI_Controller {
	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('index');
	}
	public function login() {

		$this->load->helper("url");
		$this->load->view("login");
	}
	public function signup() {

		$this->load->helper("url");
		$this->load->view("signup");
	}
	public function learning() {

		$this->load->helper("url");
		$this->load->view("learning");
	}	
	public function review() {

		$this->load->helper("url");
		$this->load->view("review");
	}		
	public function signupchoice() {

		$this->load->helper("url");
		$this->load->view("signupchoice");
	}
	public function forgot() {

		$this->load->helper("url");
		$this->load->view("forgot");
	}
	public function dashboard() {

		$this->load->helper("url");
		$this->load->view("dashboard");
	}		
	public function requestClass() {
		
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('CityPro_model');

		$data = array(
			'Name' => $_POST['name'],
			'Email' => $_POST['email'],
			'Mob_No' => $_POST['phone'],
			'Subjects' => $_POST['topic'],
			'Pincode' => $_POST['pincode'],
			'Attend_Class' => $_POST['classes'],
			'Start_Class' => $_POST['class-time']
		);

		$this->CityPro_model->insert($data);		
	}
}
