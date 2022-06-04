<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		if ( !$this->session->userdata('type') == 'administrator' )
			{
				redirect('login');

			}
		$this->load->model('Admin_model');
	}
	public function index()
		{	$data['recent_autoabo']        = $this->Admin_model->get_top_5('autoabo');
		$data['recent_mietemich']          = $this->Admin_model->get_top_5('mietemich');
		$data['recent_autoabo_requests']   = $this->Admin_model->get_top_autoabo_request();
		$data['recent_mietemich_requests'] = $this->Admin_model->get_top_mietemich_request();
		$data['autoabo_pending_count']     = $this->Admin_model->count('autoabo_requests',['status' =>'pending' , 'created_at' => date('Y-m-d')]);
		$data['mietemich_pending_count']   = $this->Admin_model->count('mietemich_requests',['status' =>'pending' , 'created_at' => date('Y-m-d')]);
		$data['page_name'] = 'dashboard';
		$this->load->view( 'admin', $data );


	}

	public function autoabo()
	{
		if (isset($_SESSION['autoabo_images'])) {
			unset($_SESSION['autoabo_images']);
		}
		$data['page_name'] = 'autoabo';
		$data['autoabo'] = $this->Admin_model->get_table('autoabo');
		$this->load->view( 'admin', $data );
	}
	
	public function autoabo_add()
	{

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();

			if (isset($_POST['date_from']) && $_POST['date_from'] !="" ) {
				$fraDato = DateTime::createFromFormat('d/m/Y', $_POST['date_from']);
				$fraDato = $fraDato->format('Y-m-d');
			}else{
				$fraDato = date('Y-m-d');
			}


	$autoabo_detail['vehicle_name']        = $_POST['vehicle_name'];
	$autoabo_detail['vehicle_brand']       = $_POST['vehicle_brand'];
	$autoabo_detail['vehicle_engine']      = $_POST['vehicle_engine'];
	$autoabo_detail['vehicle_drive_type']  = $_POST['vehicle_drive_type'];
	$autoabo_detail['vehicle_category']    = $_POST['vehicle_category'];
	$autoabo_detail['date_from']    	   = $fraDato;
	$autoabo_detail['vehicle_description'] = $_POST['vehicle_description'];
	$autoabo_detail['vehicle_fuel_type']   = $_POST['vehicle_fuel_type'];
	$autoabo_detail['transmision_type']    = $_POST['transmision_type'];
	$autoabo_detail['slug']                = $_POST['slug'];
	$autoabo_detail['one_car_left']        = isset($_POST['one_car_left'])? '1' : '0';
	$autoabo_detail['summer_special']      = isset($_POST['summer_special'])? '1' : '0';
	$autoabo_detail['winter_special']      = isset($_POST['winter_special'])? '1' : '0';
	$autoabo_detail['brand_new']           = isset($_POST['brand_new'])? '1' : '0';
	$autoabo_detail['hybrid']              = isset($_POST['hybrid'])? '1' : '0';

	$images_array = $_SESSION['autoabo_images'];
	$new_image_array = array();
	foreach ($images_array as $key => $value) {
		if($value != ""){
			$new_image_array[] = $value;
		}
	}
	$autoabo_detail['images']              =implode(',', $new_image_array);


	//auto abo prices
	$autoabo_id = $this->Admin_model->insert_table('autoabo',$autoabo_detail);

	$prices_details['autoabo_id'] = $autoabo_id;
	$prices_details['3m850km']   = $_POST['3m850km'];
	$prices_details['3m1250km']  = $_POST['3m1250km'];
	$prices_details['3m1850km']  = $_POST['3m1850km'];
	$prices_details['3m3250km']  = $_POST['3m3250km'];
	$prices_details['6m850km']   = $_POST['6m850km'];
	$prices_details['6m1250km']  = $_POST['6m1250km'];
	$prices_details['6m1850km']  = $_POST['6m1850km'];
	$prices_details['6m3250km']  = $_POST['6m3250km'];
	$prices_details['12m850km']  = $_POST['12m850km'];
	$prices_details['12m1250km'] = $_POST['12m1250km'];
	$prices_details['12m1850km'] = $_POST['12m1850km'];
	$prices_details['12m3250km'] = $_POST['12m3250km'];
	$prices_details['24m850km']  = $_POST['24m850km'];
	$prices_details['24m1250km'] = $_POST['24m1250km'];
	$prices_details['24m1850km'] = $_POST['24m1850km'];
	$prices_details['24m3250km'] = $_POST['24m3250km'];
	$prices_details['36m850km']  = $_POST['36m850km'];
	$prices_details['36m1250km'] = $_POST['36m1250km'];
	$prices_details['36m1850km'] = $_POST['36m1850km'];
	$prices_details['36m3250km'] = $_POST['36m3250km'];

	  if(isset($_POST['features']) && count($_POST['features']) > 0 ){
	  foreach($_POST['features'] as $feature)
      {
		$feature_to_add['vehicle_id']   = $autoabo_id;
		$feature_to_add['freature']     =  $feature;
		$this->db->insert('autoabo_features',$feature_to_add);
      }
      }

	$response = $this->Admin_model->insert_table('autoabo_prices',$prices_details);
		if($response)
		{
			unset($_SESSION['autoabo_images']);
			$this->session->set_flashdata('menu_added','Menu have been added');
			redirect('admin/autoabo');
		}
	}
	public function autoabo_edit($id)
	{
		if (isset($_SESSION['autoabo_images'])) {
			unset($_SESSION['autoabo_images']);
		}
		$condition['id'] = $id;
		$data['autoabo']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from autoabo a  left join autoabo_prices p on a.id = p.autoabo_id  where a.id = '$id'");
		$data['features'] = $this->Admin_model->get_where('autoabo_features',['vehicle_id'=>$id]);
		$_SESSION['autoabo_images'] = explode(',', $data['autoabo'][0]['images']);
		$data['page_name'] = 'autoabo_edit';
		$this->load->view('admin',$data);
	}
	public function autoabo_edit_process($id)
	{
		
		if (isset($_POST['date_from']) && $_POST['date_from'] !="" ) {
			$fraDato = DateTime::createFromFormat('d/m/Y', $_POST['date_from']);
			$fraDato = $fraDato->format('Y-m-d');
		}else{
			$fraDato = date('Y-m-d');
		}
		$condition['id'] = $id;
		$autoabo_detail['vehicle_name']        = $_POST['vehicle_name'];
		$autoabo_detail['vehicle_brand']       = $_POST['vehicle_brand'];
		$autoabo_detail['vehicle_engine']      = $_POST['vehicle_engine'];
		$autoabo_detail['vehicle_drive_type']  = $_POST['vehicle_drive_type'];
		$autoabo_detail['vehicle_category']    = $_POST['vehicle_category'];
		$autoabo_detail['date_from']    	   = $fraDato;
		$autoabo_detail['vehicle_description'] = $_POST['vehicle_description'];
		$autoabo_detail['vehicle_fuel_type']   = $_POST['vehicle_fuel_type'];
		$autoabo_detail['transmision_type']    = $_POST['transmision_type'];
		$autoabo_detail['slug']                = $_POST['slug'];
		$autoabo_detail['one_car_left']        = isset($_POST['one_car_left'])? '1' : '0';
		$autoabo_detail['summer_special']      = isset($_POST['summer_special'])? '1' : '0';
		$autoabo_detail['winter_special']      = isset($_POST['winter_special'])? '1' : '0';
		$autoabo_detail['brand_new']           = isset($_POST['brand_new'])? '1' : '0';
		$autoabo_detail['hybrid']              = isset($_POST['hybrid'])? '1' : '0';
		$images_array = $_SESSION['autoabo_images'];
		$new_image_array = array();
		foreach ($images_array as $key => $value) {
			if($value != ""){
				$new_image_array[] = $value;
			}
		}
		$autoabo_detail['images']              =implode(',', $new_image_array);
		// echo "<pre>";
		// print_r($autoabo_detail);
		// die();
		$response = $this->Admin_model->update_table($condition,'autoabo',$autoabo_detail);
		//auto abo prices
		$condition2['autoabo_id'] = $id;
		$prices_details['3m850km']   = $_POST['3m850km'];
		$prices_details['3m1250km']  = $_POST['3m1250km'];
		$prices_details['3m1850km']  = $_POST['3m1850km'];
		$prices_details['3m3250km']  = $_POST['3m3250km'];
		$prices_details['6m850km']   = $_POST['6m850km'];
		$prices_details['6m1250km']  = $_POST['6m1250km'];
		$prices_details['6m1850km']  = $_POST['6m1850km'];
		$prices_details['6m3250km']  = $_POST['6m3250km'];
		$prices_details['12m850km']  = $_POST['12m850km'];
		$prices_details['12m1250km'] = $_POST['12m1250km'];
		$prices_details['12m1850km'] = $_POST['12m1850km'];
		$prices_details['12m3250km'] = $_POST['12m3250km'];
		$prices_details['24m850km']  = $_POST['24m850km'];
		$prices_details['24m1250km'] = $_POST['24m1250km'];
		$prices_details['24m1850km'] = $_POST['24m1850km'];
		$prices_details['24m3250km'] = $_POST['24m3250km'];
		$prices_details['36m850km']  = $_POST['36m850km'];
		$prices_details['36m1250km'] = $_POST['36m1250km'];
		$prices_details['36m1850km'] = $_POST['36m1850km'];
		$prices_details['36m3250km'] = $_POST['36m3250km'];

		$this->Admin_model->delete_table(['vehicle_id' => $id] ,'autoabo_features');

		if(isset($_POST['features']) && count($_POST['features']) > 0 ){
		foreach($_POST['features'] as $feature)
	      {
			$feature_to_add['vehicle_id']   = $id;
			$feature_to_add['freature']     =  $feature;
			$this->db->insert('autoabo_features',$feature_to_add);
	      }
  		}

		$response = $this->Admin_model->update_table($condition2,'autoabo_prices',$prices_details);
			if($response)
			{	unset($_SESSION['autoabo_images']);
				$this->session->set_flashdata('menu_edited','Menu have been Edited');
				redirect('admin/autoabo_edit/'.$id);

			}else{
				$this->session->set_flashdata('menu_edited','Menu is not changed');
				redirect('admin/autoabo_edit/'.$id);

			}
	}
	public function autoabo_delete($id)
	{
		$response =  $this->Admin_model->delete_table(['id'=>$id],'autoabo');
		$response =  $this->Admin_model->delete_table(['autoabo_id'=>$id],'autoabo_prices');
		$response =  $this->Admin_model->delete_table(['vehicle_id'=>$id],'autoabo_features');
		$response =  $this->Admin_model->delete_table(['vehicle_id'=>$id],'autoabo_requests');
		redirect('admin/autoabo');
	}
	public function autoabo_image_upload(){
		// print_r($_FILES);
		// die();
		if(!empty($_FILES)){
  // Getting file name
  $filename = rand('111111','999999').time().$_FILES['imagefile']['name'];
  $filename = str_replace(' ', '-',$filename);
  //$filename = rand().$filename;
  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "uploads/autoabo/".$filename;

  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
  // Check extension
		if(in_array($file_extension,$valid_ext)){
			    // Compress Image
			    $this->compressImage($_FILES['imagefile']['tmp_name'],$location,100,$filename);

			  }else{
			    echo "Invalid file type.";
			}
		}
	}

public function compressImage($source, $destination, $quality,$filename) {
 move_uploaded_file($source, $destination);
  $_SESSION['autoabo_images'][] = $filename;
}

public function autoabo_image_delete(){
	$all_uploaded_images = $_SESSION['autoabo_images'];
	 $filename = str_replace(' ', '-',$_POST['name']);
	 foreach ($all_uploaded_images as $key => $value) {
	 	if (strpos($value, $filename) !== false) {
				unset($_SESSION['autoabo_images'][$key]);
    		if(file_exists("uploads/autoabo/$value")){
    			unlink("uploads/autoabo/$value"); 
    		}
		}
	 }

}



public function mietemich()
	{
		if (isset($_SESSION['mietemich_images'])) {
			unset($_SESSION['mietemich_images']);
		}
		$data['page_name'] = 'mietemich';
		$data['mietemich'] = $this->Admin_model->get_table('mietemich');
		$this->load->view( 'admin', $data );
	}
	
	public function mietemich_add()
	{
	$mietemich_detail['vehicle_name']        = $_POST['vehicle_name'];
	$mietemich_detail['vehicle_brand']       = $_POST['vehicle_brand'];
	$mietemich_detail['vehicle_engine']      = $_POST['vehicle_engine'];
	$mietemich_detail['vehicle_drive_type']  = $_POST['vehicle_drive_type'];
	$mietemich_detail['vehicle_category']    = $_POST['vehicle_category'];
	$mietemich_detail['vehicle_description'] = $_POST['vehicle_description'];
	$mietemich_detail['vehicle_fuel_type']   = $_POST['vehicle_fuel_type'];
	$mietemich_detail['transmision_type']    = $_POST['transmision_type'];
	$mietemich_detail['slug']                = $_POST['slug'];
	$mietemich_detail['one_car_left']        = isset($_POST['one_car_left'])? '1' : '0';
	$mietemich_detail['summer_special']      = isset($_POST['summer_special'])? '1' : '0';
	$mietemich_detail['winter_special']      = isset($_POST['winter_special'])? '1' : '0';
	$mietemich_detail['brand_new']           = isset($_POST['brand_new'])? '1' : '0';
	$mietemich_detail['hybrid']              = isset($_POST['hybrid'])? '1' : '0';
	$images_array = $_SESSION['mietemich_images'];
	$new_image_array = array();
	foreach ($images_array as $key => $value) {
		if($value != ""){
			$new_image_array[] = $value;
		}
	}
	$mietemich_detail['images']              =implode(',', $new_image_array);
	//auto abo prices
	$mietemich_id = $this->Admin_model->insert_table('mietemich',$mietemich_detail);

	$prices_details['mietemich_id'] = $mietemich_id;
    $prices_details['3h100km'] = $_POST['3h100km'];
    $prices_details['3h200km'] = $_POST['3h200km'];
    $prices_details['3h300km'] = $_POST['3h300km'];
    $prices_details['3h400km'] = '400';
    $prices_details['3h500km'] = '500';
    $prices_details['6h100km'] = $_POST['6h100km'];
    $prices_details['6h200km'] = $_POST['6h200km'];
    $prices_details['6h300km'] = $_POST['6h300km'];
    $prices_details['6h400km'] = $_POST['6h400km'];
    $prices_details['6h500km'] = $_POST['6h500km'];
    $prices_details['9h100km'] = $_POST['9h100km'];
    $prices_details['9h200km'] = $_POST['9h200km'];
    $prices_details['9h300km'] = $_POST['9h300km'];
    $prices_details['9h400km'] = $_POST['9h400km'];
    $prices_details['9h500km'] = $_POST['9h500km'];
    $prices_details['12h100km'] = $_POST['12h100km'];
    $prices_details['12h200km'] = $_POST['12h200km'];
    $prices_details['12h300km'] = $_POST['12h300km'];
    $prices_details['12h400km'] = $_POST['12h400km'];
    $prices_details['12h500km'] = $_POST['12h500km'];
    $prices_details['24h100km'] = $_POST['24h100km'];
    $prices_details['24h200km'] = $_POST['24h200km'];
    $prices_details['24h300km'] = $_POST['24h300km'];
    $prices_details['24h400km'] = $_POST['24h400km'];
    $prices_details['24h500km'] = $_POST['24h500km'];
    $prices_details['48h100km'] = $_POST['48h100km'];
    $prices_details['48h200km'] = $_POST['48h200km'];
    $prices_details['48h300km'] = $_POST['48h300km'];
    $prices_details['48h400km'] = $_POST['48h400km'];
    $prices_details['48h500km'] = $_POST['48h500km'];
    if(isset($_POST['features']) && count($_POST['features']) > 0 ){
     foreach($_POST['features'] as $feature)
      {
		$feature_to_add['vehicle_id']   = $autoabo_id;
		$feature_to_add['freature']     =  $feature;
		$this->db->insert('mietemich_features',$feature_to_add);
      }
  	}

	$response = $this->Admin_model->insert_table('mietemich_prices',$prices_details);
		if($response)
		{
			unset($_SESSION['mietemich_images']);
			$this->session->set_flashdata('menu_added','Menu have been added');
			redirect('admin/mietemich');
		}
	}
	public function mietemich_edit($id)
	{
		if (isset($_SESSION['mietemich_images'])) {
			unset($_SESSION['mietemich_images']);
		}
		$condition['id'] = $id;
		$data['mietemich']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.id = '$id'");
		$_SESSION['mietemich_images'] = explode(',', $data['mietemich'][0]['images']);
		$data['features'] = $this->Admin_model->get_where('mietemich_features',['vehicle_id'=>$id]);
		
		$data['page_name'] = 'mietemich_edit';
		$this->load->view('admin',$data);
	}

	public function mietemich_edit_process($id)
	{

		$condition['id'] = $id;
		$mietemich_detail['vehicle_name']        = $_POST['vehicle_name'];
		$mietemich_detail['vehicle_brand']       = $_POST['vehicle_brand'];
		$mietemich_detail['vehicle_engine']      = $_POST['vehicle_engine'];
		$mietemich_detail['vehicle_drive_type']  = $_POST['vehicle_drive_type'];
		$mietemich_detail['vehicle_category']    = $_POST['vehicle_category'];
		$mietemich_detail['vehicle_description'] = $_POST['vehicle_description'];
		$mietemich_detail['vehicle_fuel_type']   = $_POST['vehicle_fuel_type'];
		$mietemich_detail['transmision_type']    = $_POST['transmision_type'];
		$mietemich_detail['slug']                = $_POST['slug'];
		$mietemich_detail['one_car_left']        = isset($_POST['one_car_left'])? '1' : '0';
		$mietemich_detail['summer_special']      = isset($_POST['summer_special'])? '1' : '0';
		$mietemich_detail['winter_special']      = isset($_POST['winter_special'])? '1' : '0';
		$mietemich_detail['brand_new']           = isset($_POST['brand_new'])? '1' : '0';
		$mietemich_detail['hybrid']              = isset($_POST['hybrid'])? '1' : '0';
		
		$images_array = $_SESSION['mietemich_images'];
		$new_image_array = array();
		foreach ($images_array as $key => $value) {
			if($value != ""){
				$new_image_array[] = $value;
			}
		}
		$mietemich_detail['images']              =implode(',', $new_image_array);
		
		$response = $this->Admin_model->update_table($condition,'mietemich',$mietemich_detail);
		//miete mich prices
		$condition2['mietemich_id'] = $id;
    $prices_details['3h100km'] = $_POST['3h100km'];
    $prices_details['3h200km'] = $_POST['3h200km'];
    $prices_details['3h300km'] = $_POST['3h300km'];
    $prices_details['3h400km'] = '400';
    $prices_details['3h500km'] = '500';
    $prices_details['6h100km'] = $_POST['6h100km'];
    $prices_details['6h200km'] = $_POST['6h200km'];
    $prices_details['6h300km'] = $_POST['6h300km'];
    $prices_details['6h400km'] = $_POST['6h400km'];
    $prices_details['6h500km'] = $_POST['6h500km'];
    $prices_details['9h100km'] = $_POST['9h100km'];
    $prices_details['9h200km'] = $_POST['9h200km'];
    $prices_details['9h300km'] = $_POST['9h300km'];
    $prices_details['9h400km'] = $_POST['9h400km'];
    $prices_details['9h500km'] = $_POST['9h500km'];
    $prices_details['12h100km'] = $_POST['12h100km'];
    $prices_details['12h200km'] = $_POST['12h200km'];
    $prices_details['12h300km'] = $_POST['12h300km'];
    $prices_details['12h400km'] = $_POST['12h400km'];
    $prices_details['12h500km'] = $_POST['12h500km'];
    $prices_details['24h100km'] = $_POST['24h100km'];
    $prices_details['24h200km'] = $_POST['24h200km'];
    $prices_details['24h300km'] = $_POST['24h300km'];
    $prices_details['24h400km'] = $_POST['24h400km'];
    $prices_details['24h500km'] = $_POST['24h500km'];
    $prices_details['48h100km'] = $_POST['48h100km'];
    $prices_details['48h200km'] = $_POST['48h200km'];
    $prices_details['48h300km'] = $_POST['48h300km'];
    $prices_details['48h400km'] = $_POST['48h400km'];
    $prices_details['48h500km'] = $_POST['48h500km'];

    $this->Admin_model->delete_table(['vehicle_id' => $id] ,'mietemich_features');
    if(isset($_POST['features']) && count($_POST['features']) > 0 ){
		foreach($_POST['features'] as $feature)
      {
		$feature_to_add['vehicle_id']   = $id;
		$feature_to_add['freature']     =  $feature;
		$this->db->insert('mietemich_features',$feature_to_add);
      }
  	}
		$response = $this->Admin_model->update_table($condition2,'mietemich_prices',$prices_details);
			if($response)
			{	unset($_SESSION['mietemich_images']);
				$this->session->set_flashdata('menu_edited','Menu have been Edited');
				redirect('admin/mietemich_edit/'.$id);

			}else{
				$this->session->set_flashdata('menu_edited','Menu is not changed');
				redirect('admin/mietemich_edit/'.$id);

			}
	}
	public function mietemich_delete($id)
	{
		$response =  $this->Admin_model->delete_table(['id'=>$id],'mietemich');
		$response =  $this->Admin_model->delete_table(['mietemich_id'=>$id],'mietemich_prices');
		$response =  $this->Admin_model->delete_table(['vehicle_id'=>$id],'mietemich_features');
		$response =  $this->Admin_model->delete_table(['vehicle_id'=>$id],'mietemich_requests');
		redirect('admin/mietemich');
	}
	public function mietemich_image_upload(){
		// print_r($_FILES);
		// die();
		if(!empty($_FILES)){
  // Getting file name
  $filename = rand('111111','999999').time().$_FILES['imagefile']['name'];
  $filename = str_replace(' ', '-',$filename);
  //$filename = rand().$filename;
  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "uploads/mietemich/".$filename;

  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
  // Check extension
		if(in_array($file_extension,$valid_ext)){
			    // Compress Image
			    $this->compressImage_mietemich($_FILES['imagefile']['tmp_name'],$location,100,$filename);

			  }else{
			    echo "Invalid file type.";
			}
		}
	}

public function compressImage_mietemich($source, $destination, $quality,$filename) {
	move_uploaded_file($source, $destination);
  $_SESSION['mietemich_images'][] = $filename;
}

public function mietemich_image_delete(){
	$all_uploaded_images = $_SESSION['mietemich_images'];
	 $filename = str_replace(' ', '-',$_POST['name']);
	 foreach ($all_uploaded_images as $key => $value) {
	 	if (strpos($value, $filename) !== false) {
				unset($_SESSION['mietemich_images'][$key]);
    		if(file_exists("uploads/mietemich/$value")){
    			unlink("uploads/mietemich/$value"); 
    		}
		}
	 }

}


















































	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function profile()
	{
		$data['page_name'] = 'profile';
		$id                = $this->session->userdata('id');
		$data['profile']   = $this->Admin_model->get_where('users',['id'=>$id]);
		$this->load->view( 'admin', $data );
	}

	public function payment()
	{
		$data['page_name'] = 'payment';
		$this->load->view( 'index', $data );
	}
	function newpage(){
		$data['page_name'] = 'newpage';
		$this->load->view( 'index', $data );
	}

	public function orders()
	{
		$data['page_name'] = 'orders';
		$this->load->view( 'index', $data );
	}

	public function subsciptions()
	{
		$data['page_name'] = 'subsciptions';
		$this->load->view( 'index', $data );
	}

	public function settings()
	{
		$data['page_name'] = 'settings';
		$data['settings']  = $this->Admin_model->get_settings();
		$this->load->view( 'index', $data );
	}

	public function update_settings()
	{
		$settings['about_detail']   = $this->input->post('about_detail');
		$settings['business_email'] = $this->input->post('business_email');
		$settings['facebook']       = $this->input->post('facebook');
		$settings['twitter']        = $this->input->post('twitter');
		$settings['google_plus']    = $this->input->post('google_plus');
		$settings['pinterest']      = $this->input->post('pinterest');
		$settings['instagram']      = $this->input->post('instagram');
		$settings['skype']          = $this->input->post('skype');
		$settings['contact_detail'] = $this->input->post('contact_detail');
		$settings['address']        = $this->input->post('address');
		$settings['email1']         = $this->input->post('email1');
		$settings['email2']         = $this->input->post('email2');
		$settings['phone1']         = $this->input->post('phone1');
		$settings['phone2']         = $this->input->post('phone2');
		$settings['fax']            = $this->input->post('fax');
		$result = $this->Admin_model->update_settings($settings);
		 echo $result ;

	}

	public function testimonial(){
		$data['page_name'] = 'testimonial';
		$data['testimonials']   = $this->Admin_model->get_all_testimonial();
		$this->load->view( 'admin', $data );
	}

	public function add_testimonial(){
		$data['page_name'] = 'add_testimonial';
		$this->load->view( 'admin', $data );
	}
	public function add_testimonial_process()
	{
		$testimonial['author']        = $this->input->post('author');
		$testimonial['desigination']        = $this->input->post('desigination');
		$testimonial['description'] = $this->input->post('testimonial_description');
		if(!empty($_FILES['menu_image']['name']))
			{
			$strtotime           = strtotime("now");
			$target_file         = str_replace(' ', '-', $_FILES['menu_image']['name']);

			$filename =  $strtotime.'_'.$target_file ;

			$config['upload_path']   = 'uploads/testimonial';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['file_name']     = $filename;

			$this->load->library( 'upload', $config );
			$this->upload->do_upload('menu_image');
			$testimonial['image'] = $filename;
			}
		$response = $this->Admin_model->add_testimonial($testimonial);
		if($response)
		{
			$this->session->set_flashdata('testimonial_added','Menu have been added');
			redirect('admin/add_testimonial');

		}
	}

	public function edit_testimonial($id)
	{
		$data['testimonial']      =  $this->Admin_model->get_single_testimonial($id);
		$data['page_name'] = 'edit_testimonial';
		$this->load->view('admin',$data);
	}
	public  function edit_testimonial_process($id)
	{
		$testimonial['id'] = $id;
		$testimonial['author']        = $this->input->post('author');
		$testimonial['desigination']        = $this->input->post('desigination');
		$testimonial['description'] = $this->input->post('menu_description');

		if(!empty($_FILES['menu_image']['name']))
			{
			$strtotime           = strtotime("now");
			$target_file         = str_replace(' ', '-', $_FILES['menu_image']['name']);

			$filename =  $strtotime.'_'.$target_file ;

			$config['upload_path']   = 'uploads/testimonial';
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['file_name']     = $filename;

			$this->load->library( 'upload', $config );
			$this->upload->do_upload('menu_image');
			$testimonial['image'] = $filename;
			}
			else
			{
				$testimonial['image'] = $this->input->post('old_menu_image');
			}
			$response = $this->Admin_model->update_testimonial($testimonial);
		echo $response;
		if($response)
		{
			$this->session->set_flashdata('plan_edited','Menu have been Edited');
			redirect('admin/edit_testimonial/'.$id);

		}
	}
	public function delete_testimonial(){
		$id = $this->input->post('id');
		$this->Admin_model->delete_testimonial($id);
		echo 'success';
	}

	public function faq($param1 = '',$param2='')
	{
		if($param1 == 'add')
		{
			$data['page_name'] = 'add_faq' ;
		}
		elseif($param1 == 'add_process' )
		{
			$faq['question']        = $this->input->post('question');
			$faq['answer'] = $this->input->post('answer');
			$faq['question_type']		 = 'main';
			$response = $this->Admin_model->add('faq',$faq);
				if($response)
				{
					$this->session->set_flashdata('faq_added','Faq have been added');
					redirect(base_url().'admin/faq/add','refresh');

				}
		}
		else
		{
		$data['page_name'] = 'faq';
		$data['faqs'] = $this->Admin_model->get_all('faq');
		}
		$this->load->view('index',$data);
 	}
 	public function delete_faq()
	    {
			$faq['id'] = $this->input->post('id');
			$this->Admin_model->delete('faq',$faq);
			echo 'success';

		}
	public function updateUserProfile()
	{


		$data['firstName']  = $this->input->post('firstName');
		$data['lastName']   = $this->input->post('lastName');
		$data['email']      = $this->input->post('email');
		$data['zip']        = $this->input->post('zip');
		$data['type']		= 'administrator';
		$data['updated_at'] = date("Y-m-d H:i:s");
		$data['id']             = $this->session->userdata('id');
		$oldemail           = $this->session->userdata('email');
		if($data['email'] != $oldemail )
		{
	 	   	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
			if($this->form_validation->run() == FALSE)
			{
				echo 'not_unique';
				return;

			}
		}
		$this->session->set_userdata($data);
 	   $response = $this->Admin_model->updateUser($data);
 	   	if($response)
 	   	{
 	   		$this->session->set_userdata($data);
 	   		echo  'success' ;
 	   	}
 	   	else
 	   	{
 	   		echo 'error';
 	   	}
	}

	public function resetPassword()
	{
		$data['email']        = $this->session->userdata('email');
		$data['password']     = md5( $this->input->post('password'));
		$data['new_password'] = md5( $this->input->post('new_password') );
		$data['updated_at']   = date("Y-m-d H:i:s");
		$response             = $this->Admin_model->reset_password($data);
		echo  $response;
	}
	public function price()
	{
		$data['page_name'] = 'price';
		$data['price_setup'] = $this->Admin_model->get_all('price_setup');
		$this->load->view('index',$data);
	}
	public function update_price()
	{
		$response = $this->Admin_model->update_price_setup($_POST);
		if($response)
		{
			redirect(base_url().'admin/price','refresh');
		}
	}




}//end of controller admin