<?php
Class User_model extends CI_Model {
	public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }
	public function getUsers()
	{
		$data ['type'] = 'customer';
 		$record = $this->db->get_where('users',$data);
		return $record->result_array();
	}
	public function change_user_status($data)
	{
		$id   = $data['id'];
		$data = $this->db->where( 'id', $id )->update( 'users', $data );
		return $data;
	}
	public function getSingleUser( $id )
	{
		$data = $this->db->get_where( 'users', ['id'=>$id] );
		return $data->result_array();
	}
	public function deleteUser( $id )
	{
		$response = $this->db->where( 'id', $id )->delete('users');
		return $response;
	}
	public function updateUser( $data )
	{
		$id   = $data['id'];
		$data = $this->db->where( 'id', $id )->update( 'users', $data );
		return $data;
	}
}