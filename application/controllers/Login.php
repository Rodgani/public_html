<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if ( $this->session->userdata('type') == 'administrator' ){
			redirect('admin');
		}
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login_process()
	{
		$data['email']          = $this->input->post('email');
		$data['password']       = md5( $this->input->post('password') );
		$data['type']           = 'administrator';
		$data['status']         = '1';
		$responce               = $this->Admin_model->validateLogin( $data );	

		if ( count($responce) <= 0)
		{
			echo 'error';
		}
		else
		{
			$user_arr['id']         = $responce[0]['id'];
			$user_arr['firstName']  = $responce[0]['firstName'];
			$user_arr['lastName']   = $responce[0]['lastName'];
			$user_arr['email']      = $responce[0]['email'];
			$user_arr['password']   = $responce[0]['password'];
			$user_arr['zip']        = $responce[0]['zip'];
			$user_arr['type']       = $responce[0]['type'];
			$user_arr['status']     = $responce[0]['status'];
			$user_arr['created_at'] = $responce[0]['created_at'];
			$user_arr['updated_at'] = $responce[0]['updated_at'];
			$this->session->set_userdata( $user_arr );
			echo 'success';
		}
	}

	public function forget_password()
	{
		$this->load->view( 'forget_password' );
	}

}