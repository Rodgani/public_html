<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Requests extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if ( !$this->session->userdata('type') == 'administrator' )
			{
				redirect('login');
			}
		$this->load->model('Admin_model');
	}
	public function get($request_type , $status){
	if(! in_array($request_type, ['mietemich','autoabo']) || ! in_array($status, ['pending','connected','all'] )){
		show_404();
	}
		$data['requests'] = $this->Admin_model->get_requests($request_type,$status);
		$data['request_type'] = $request_type;
		$data['page_name'] = 'requests_view';
		$this->load->view('admin',$data);
		// echo "<pre>";
		// print_r($data);
		// die();
	}
	public function custom_requests(){
		$data['requests'] = $this->Admin_model->get_custom_requests();
		$data['page_name'] = 'custom_requests_view';
		$this->load->view('admin',$data);
	}
	public function customrequestview($id){
		$data['request'] = $this->Admin_model->get_single_custom_request($id);
		$data['current_request_id'] = $id;
		$data['page_name'] = 'custom_request_view';
		$this->load->view('admin',$data);
	}
	public function change_status($request_type , $status,$id){
	if(! in_array($request_type, ['mietemich','autoabo']) || ! in_array($status, ['pending','connected','delivered'] )){
		show_404();
	}
		$response = $this->Admin_model->change_request_status($request_type,$status,$id);
		if($response){
			echo 'success';
		}
	}
	public function delete_request($request_type , $id){
	if(! in_array($request_type, ['mietemich','autoabo']) ){
		show_404();
	}
		$response = $this->Admin_model->delete_request($request_type,$id);
		if($response){
			echo 'success';
		}
	}
	public function delete_custom_request($id){
		$response = $this->Admin_model->delete_custom_request($id);
		if($response){
			echo 'success';
		}
	}
	public function requestview($request_type,$id){
		$data['request'] = $this->Admin_model->get_single_request($request_type,$id);
		$data['request_type'] = $request_type;
		$data['current_request_id'] = $id;
		$data['page_name'] = 'request_view';
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view('admin',$data);
	}
}//end of controller admin