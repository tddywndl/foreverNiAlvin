<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forever_Chinua extends CI_Controller {
	
	public $Source_of_Forever = [
									'style' => array('assets/bower_components/bootstrap/dist/css/bootstrap.css',
												'assets/bower_components/angular-bootstrap/ui-bootstrap-csp.css'
												),
									'js' => array('assets/bower_components/angular/angular.js',
												'modules/app.module/app.module.js',
												'assets/bower_components/angular-bootstrap/ui-bootstrap.js',
												'assets/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js')
								];
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('forever',$this->Source_of_Forever);
	}

	public function dashboard()
	{
		$this->load->view('walang_forever',$this->Source_of_Forever);
	}
	public function register()
	{
		 $data = $this->input->post(array('username','password','email'),true);
					
					 $this->Chinua_model->register(
					 					$data['username'],
					 					$data['password'],
					 					$data['email']
					 					);
			
					 $this->output
						->set_status_header(200)
						->set_header('Content-type:application/json')
						->set_output(json_encode(array('success' => '<strong>Successfully Registered</strong>','data' =>  $this->Chinua_model->regList())),
																	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		
						
	}

	public function login()
	{
		 $data = $this->input->post(array('username','password'),true);
		 $info = $this->Chinua_model->getUser($data['username']);
		 // echo print_r($data);
		 // echo print_r($info);
		// $this->session->set_userdata($info);
		 if($info[0]['password'] == $data['password'])
		 {
		  
		  $this->output
						->set_status_header(200)
						->set_header('Content-type:application/json')
						->set_output(json_encode(array('login'=> true,'data' =>  $info)),
																	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		}else{
			//;$this->session->sess_destroy();
			 $this->output
						->set_status_header(200)
						->set_header('Content-type:application/json')
						->set_output(json_encode(array('err' => 'Invalid Username or Password!')),
																	JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header('Location: '.base_url());
	}


}
