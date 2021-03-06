<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$data['page_name'] = 'home';
    $data['select_price'] = '36m850km';
		$this->load->view( 'front', $data );
	}

  public function abonnieren ($slug, $vehicle_id, $km, $duration) {
    if ($slug == 'miete-mich-taeglich') {
      return $this->abonnieren_daily($slug, $vehicle_id, $km, $duration);
    }
    if ($slug != 'autoabo') {
      show_404();
    }
  }

	public function mietemich_single($slug)
	{
		$data['mietemich']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.slug = '$slug' and a.enabled = 1");
		if(!count($data['mietemich'])){
			show_404();
		}
			if(isset($_GET['duration'],$_GET['km']) && in_array($_GET['km'] , ['100km','200km','300km','400km','500km'])  && in_array($_GET['duration'] , ['3h','6h','9h','12h','24h','48h']) )
		{
			$data['km'] = $_GET['km'];
			$data['duration'] = $_GET['duration'];	
			$data['select_price'] =$_GET['duration'] . $_GET['km']; 
		}else{
			$data['duration'] = '3h';
			$data['km']		  = '100km';
			$data['select_price'] = '3h100km';
		}
		$data['features'] = $this->Admin_model->get_where('mietemich_features',['vehicle_id'=>$data['mietemich'][0]['id']]);
		$data['page_name'] = 'mietemich_single';
		$this->load->view( 'front', $data );
	}

	public function abonnieren_daily ($slug, $vehicle_id, $km, $duration) { 
		if($slug != 'miete-mich-taeglich' ){
			show_404();
		}
		if(isset($duration,$km) && in_array($km , ['100km','200km','300km','400km','500km'])  && in_array($duration , ['3h','6h','9h','12h','24h','48h'])){
		}else{
			show_404();
		}
		$data['select_price'] = $duration.$km;
		$data['vehicle_details']      =  $this->Admin_model->get_table_row_query("select m.* , p.* from mietemich m  left join mietemich_prices p on m.id = p.mietemich_id  where m.id = $vehicle_id and m.enabled = 1");
		if(!count($data['vehicle_details'])){
			show_404();	
		}
		$data['km'] = $km;
		$data['duration'] = $duration;
		$data['request_for'] = 'miete-mich-taeglich';
		$data['method'] = 'mietemich';
// echo "<pre>";
// 		print_r($data);
// 		die();
		$data['page_name'] = 'abonnieren';
		$this->load->view( 'front', $data );
	}

		public function bestaetigung_tagesmiete () {
		if(! isset($_SESSION['request_done'])){
			redirect('miete-mich-taeglich');
		}
		$vehicle_id = $_SESSION['request_done'];
		$data['request']      =  $this->Admin_model->get_table_row_query("select m.* , r.* from mietemich_requests r  left join mietemich m on m.id = r.vehicle_id  where r.mietemich_request_id = $vehicle_id");
		$data['image_path'] = 'mietemich';
		$data['page_name'] = 'bestaetigung-tagesmiete';
		$this->load->view( 'front', $data );
	}
	public function about () { 
		$data['page_name'] = 'about';
		$this->load->view( 'front', $data );
	}
	public function autos () {
		$where = "";
		if(isset($_GET['fuel']) && $_GET['fuel'] != 'all' ){
		$where .= " and vehicle_fuel_type ='".$_GET['fuel']."'" ;
		$data['fuel'] = $_GET['fuel'];
		}else{
		$data['fuel'] = 'all';
		}
		if(isset($_GET['transmission']) && $_GET['transmission'] != 'all' ){
		$where .= " and transmision_type ='".$_GET['transmission']."'";
		$data['transmission'] = $_GET['transmission'];
		}else{
		$data['transmission'] = 'all';
		}
		if(isset($_GET['duration'],$_GET['km']) && in_array($_GET['km'] , ['100km','200km','300km','400km','500km'])  && in_array($_GET['duration'] , ['3h','6h','9h','12h','24h','48h']) )
		{
		$data['duration'] = $_GET['duration'];
		$data['km']		  = $_GET['km'];
		$data['select_price'] =  $_GET['duration'] . $_GET['km'];
		}else{
		$data['duration'] = '3h';
		$data['km']		  = '100km';
		$data['select_price'] = '3h100km';
		}
		$config['km'] = $data['km'];
		$config['duration'] = $data['duration'];
		$data['config'] = $config;
		$data['mietemichs']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.id > 0 and a.enabled = 1 $where ORDER BY a.id desc");

		$data['page_name'] = 'autos';
		$this->load->view( 'front', $data );
	}

	public function fahrzeugverkauf () {
	  $data['page_name'] = 'fahrzeugverkauf';
	  $this->load->view('front', $data);
  }

	public function fahrzeugankauf () { 
		$data['page_name'] = 'fahrzeugankauf';
		$this->load->view( 'front', $data );
	}

  public function fahrzeugankauf_formular () {
    $data['page_name'] = 'fahrzeugankauf_formular';
    $this->load->view( 'front', $data );
  }
	public function kontakt () { 
		$data['page_name'] = 'kontakt';
		$this->load->view( 'front', $data );
	}
	public function reperaturservice(){
		$data['page_name'] = 'reperaturservice';
		$this->load->view( 'front', $data );
	}
	public function jobs(){
		$data['page_name'] = 'jobs';
		$this->load->view('front',$data);
	}
	public function testing_form(){
		$data['page_name'] = 'testing_form';
		$this->load->view('front',$data);
	}
	public function terms_and_conditions(){
		$data['page_name'] = 'terms';
		$this->load->view('front',$data);
	}
	public function impressum(){
		$data['page_name'] = 'impressum';
		$this->load->view('front',$data);
	}
  public function werkstatt() {
    $where = "";
    if(isset($_GET['fuel']) && $_GET['fuel'] != 'all' ){
      $where .= " and vehicle_fuel_type ='".$_GET['fuel']."'" ;
      $data['fuel'] = $_GET['fuel'];
    }else{
      $data['fuel'] = 'all';
    }
    if(isset($_GET['transmission']) && $_GET['transmission'] != 'all' ){
      $where .= " and transmision_type ='".$_GET['transmission']."'";
      $data['transmission'] = $_GET['transmission'];
    }else{
      $data['transmission'] = 'all';
    }
    if(isset($_GET['duration'],$_GET['km']) && in_array($_GET['km'] , ['100km','200km','300km','400km','500km'])  && in_array($_GET['duration'] , ['3h','6h','9h','12h','24h','48h']) )
    {
      $data['duration'] = $_GET['duration'];
      $data['km']		  = $_GET['km'];
      $data['select_price'] =  $_GET['duration'] . $_GET['km'];
    }else{
      $data['duration'] = '3h';
      $data['km']		  = '100km';
      $data['select_price'] = '3h100km';
    }
    $config['km'] = $data['km'];
    $config['duration'] = $data['duration'];
    $data['config'] = $config;
    $data['mietemichs']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.id > 0 and a.enabled = 1 $where ORDER BY a.id desc");

    $data['page_name'] = 'werkstatt';
    $this->load->view('front', $data);
  }

  public function autoabo() {
	$data['page_name'] = 'autoabo';
    $this->load->view('front', $data);
  }
}
