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
		$this->load->view( 'front', $data );
	}
	public function autoabo()
	{
		$where = "";
		$orderby= "";
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
		if(isset($_GET['duration'],$_GET['km']) && in_array($_GET['km'] , ['850km','1250km','1850km','3250km'])  && in_array($_GET['duration'] , ['3month','6month','12month','24month','36month']) )
		{
			$data['duration'] = $_GET['duration'];
			$data['km']		  = $_GET['km'];
			$data['select_price'] = str_replace('onth', '', $_GET['duration']) . $_GET['km']; 
		}else{
			$data['duration'] = '36month';
			$data['km']		  = '850km';
			$data['select_price'] = '36m850km';
		}
		if(isset($_GET['sortby'])){
			if($_GET['sortby'] == 'pricedesc'){
				$orderby .= " ORDER BY p.".$data['select_price']." desc "; 
				$data['sortby'] = $_GET['sortby'];
			}else if ($_GET['sortby'] == 'priceasc'){
				$orderby .= " ORDER BY p.".$data['select_price']." asc "; 
				$data['sortby'] = $_GET['sortby'];
			}else{
				$orderby .= "ORDER BY a.id desc"; 
				$data['sortby'] = $_GET['sortby'];
			}
 		}else{
			// $orderby .= "ORDER BY a.id desc"; 
			// $data['sortby'] = 'newest';
			$orderby .= " ORDER BY p.".$data['select_price']." asc "; 
				$data['sortby'] = 'priceasc';
		}
		$config['km'] = $data['km'];
		$config['duration'] = $data['duration'];
		$data['config'] = $config;
		$data['autoabos']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from autoabo a  left join autoabo_prices p on a.id = p.autoabo_id  where a.id > 0  $where $orderby");
		$data['page_name'] = 'autoabo';
		$this->load->view( 'front', $data );
	}
	public function autoabo_single($slug)
	{
		$data['autoabo']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from autoabo a  left join autoabo_prices p on a.id = p.autoabo_id  where a.slug = '$slug'");
		if(!count($data['autoabo'])){
			show_404();
		}
		$data['features'] = $this->Admin_model->get_where('autoabo_features',['vehicle_id'=>$data['autoabo'][0]['id']]); 
		if(isset($_GET['duration'],$_GET['km']) && in_array($_GET['km'] , ['850km','1250km','1850km','3250km'])  && in_array($_GET['duration'] , ['3month','6month','12month','24month','36month']) ){
			$data['km'] = $_GET['km'];
			$data['duration'] = $_GET['duration'];	
			$data['select_price'] = str_replace('onth', '', $_GET['duration']) . $_GET['km']; 
		}else{
			$data['duration'] = '36month';
			$data['km']		  = '850km';
			$data['select_price'] = '36m850km';
		}
		$data['page_name'] = 'autoabo_single';
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view( 'front', $data );
	}
		public function mietemich()
	{
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
		$data['mietemichs']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.id > 0  $where ORDER BY a.id desc");
		$data['page_name'] = 'mietemich';
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view( 'front', $data );
	}
	public function mietemich_single($slug)
	{
		$data['mietemich']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from mietemich a  left join mietemich_prices p on a.id = p.mietemich_id  where a.slug = '$slug'");
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
	public function abonnieren ($slug, $vehicle_id, $km, $duration) { 
		if($slug != 'autoabo' ){
			show_404();
		}
		if(isset($duration,$km) && in_array($km , ['850km','1250km','1850km','3250km'])  && in_array($duration , ['3month','6month','12month','24month','36month'])){
		}else{
			show_404();
		}
		$data['select_price'] = str_replace('onth', '', $duration) . $km;
		$data['vehicle_details']      =  $this->Admin_model->get_table_row_query("select a.* , p.* from autoabo a  left join autoabo_prices p on a.id = p.autoabo_id  where a.id = $vehicle_id");
		if(!count($data['vehicle_details'])){
			show_404();	
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		$data['km'] = $km;
		$data['duration'] = $duration;
		$data['request_for'] = 'auto-abo';
		$data['method'] = 'autoabo';
		$data['page_name'] = 'abonnieren';
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
		$data['vehicle_details']      =  $this->Admin_model->get_table_row_query("select m.* , p.* from mietemich m  left join mietemich_prices p on m.id = p.mietemich_id  where m.id = $vehicle_id");
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
	public function bestaetigung () {
		if(! isset($_SESSION['request_done'])){
			redirect('auto-abo');
		}
		$vehicle_id = $_SESSION['request_done'];
		$data['request']      =  $this->Admin_model->get_table_row_query("select a.* , r.* from autoabo_requests r  left join autoabo a on a.id = r.vehicle_id  where r.autoabo_request_id = $vehicle_id");
		$data['image_path'] = 'autoabo';
		$data['page_name'] = 'bestaetigung';
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
		$data['page_name'] = 'autos';
		$this->load->view( 'front', $data );
	}
	public function fahrzeugankauf () { 
		$data['page_name'] = 'fahrzeugankauf';
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
	public function finanzierung(){
		$data['page_name'] = 'finanzierung';
		$this->load->view('front',$data);
	}
	public function garanite(){
		$data['page_name'] = 'garanite';
		$this->load->view('front',$data);
	}
	public function autoversicherung(){
		$data['page_name'] = 'autoversicherung';
		$this->load->view('front',$data);
	}
	public function dienstleistung(){
		$data['page_name'] = 'dienstleistung';
		$this->load->view('front',$data);
	}
	public function jobs(){
		$data['page_name'] = 'jobs';
		$this->load->view('front',$data);
	}
	public function terms_and_conditions(){
		$data['page_name'] = 'kopie-von-impressum';
		$this->load->view('front',$data);
	}
	public function impressum(){
		$data['page_name'] = 'impressum';
		$this->load->view('front',$data);
	}
	public function automiete(){
		$data['page_name'] = 'automiete';
		$this->load->view('front',$data);
	}
}//end of controller admin