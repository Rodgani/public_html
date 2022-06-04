<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function validatelogin($data)
    {
        $query = $this->db->get_where('users', $data);
        if($query->num_rows() >0)
        {
            return $query->result_array();
        }
        else{
            return array();
        }
    }

    public function change_request_status($request_type,$status ,$id){
        $table_name = $request_type. '_requests';
          $column = $request_type. '_request_id';
        $status = $this->db->where([$column => $id])->update($table_name,['status'=>$status]);
        return $status;
    }
    public function delete_request($request_type,$id){
        $table_name = $request_type. '_requests';
        $column = $request_type. '_request_id';
        $status = $this->db->where([$column => $id])->delete($table_name);
        return $status;
    }
    public function delete_custom_request($id){
        $status = $this->db->where(['id' => $id])->delete('custom_requests');
        return $status;
    }

    public function get_single_request($request_type,$id){
        $table_name = $request_type.'_requests';
        $id_field = $request_type.'_request_id';
         $data = $this->db->query("select m.* , r.* from $table_name r  left join $request_type m on m.id = r.vehicle_id where r.".$id_field." =$id ");  
         return $data->result_array();
    }
    public function get_single_custom_request($id){
       
         $data = $this->db->get_where('custom_requests',['id'=>$id]);  
         return $data->result_array();
    }

    public function get_requests($request_type,$status){
        $where = '';
        if($status != 'all'){
            $where = "where r.status = '$status'";
        }
        $table_name = $request_type.'_requests';
         $data = $this->db->query("select m.* , r.* from $table_name r  left join $request_type m on m.id = r.vehicle_id $where  order by  r.".$request_type."_request_id desc ");  
         return $data->result_array();
    }
    public function get_custom_requests(){
         $data = $this->db->get('custom_requests');
         return $data->result_array();
    }

    public function count($table,$where){
        $data = $this->db->get_where($table,$where);
        return $data->num_rows();
    }

    public function get_where($table,$conditon){
            $data = $this->db->get_where($table,$conditon);
            return $data->result_array();
    }   

    public function get_top_5($table){
        $data = $this->db->query("Select * from $table ORDER BY id desc limit 5");
         return $data->result_array();
    }

    public function get_top_mietemich_request(){
        $data = $this->db->query("select m.* , r.* from mietemich_requests r  left join mietemich m on m.id = r.vehicle_id  order by  r.mietemich_request_id desc  limit 10");
        return $data->result_array();
    }
     public function get_top_autoabo_request(){
        $data = $this->db->query("select m.* , r.* from autoabo_requests r  left join autoabo m on m.id = r.vehicle_id  order by  r.autoabo_request_id desc  limit 10");  
         return $data->result_array();
    }

    public function get_table($table)
    {
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function get_table_row($condition,$table)
    {
        $this->db->where($condition);
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function checkNumRows($table,$where='')
    {
        $query=$this->db->get_where($table,$where);
        return  $query->num_rows();
    }

    public function get_table_row_query($query)
    {
        $data = $this->db->query($query);
        return $data->result_array();
    }

    public function check_availablity($table,$condition)
    {
       $data =  $this->db->where($condition)->get($table);
       if($data->num_rows() > 0 ){
        return $data->result_array();
       }
       else{
        return array();
       }
    }

    public function insert_table($table,$user_val)
    {
        $this->db->insert($table,$user_val);
        return $this->db->insert_id();
    }

    public function delete_table($condition,$table)
    {
        $this->db->where($condition);
        $data = $this->db->delete($table);
    }
    public function update_table($condition,$table,$user_val)
    {
        $this->db->where($condition);
        $this->db->set($user_val);
        $this->db->update($table);
        return $this->db->affected_rows();
    }
    public function update_oilchange($condition,$table,$user_val)
    {
        $this->db->where($condition);
        $this->db->update($table,$user_val);
        return $this->db->affected_rows();
    }
        public function updateUser( $data )
    {

        $id   = $data['id'];
        $data = $this->db->where( 'id', $id )->update( 'users', $data );
        return $data;
    }
        public function reset_password($data)
    {
        $user['email']            = $data['email'];
        $user['password']         = $data['password'];
        $new_details['updated_at']        = $data['updated_at'];
        $new_details['password'] = $data['new_password'];
        $this->db->where($user)->update('users',$new_details);
            if ($this->db->affected_rows() > 0)
            {
              return 1;
            }
            else
            {
              return 0;
            }
    }
        public function add_testimonial($testimonial)
    {
        $this->db->insert('testimonial',$testimonial);
        return $this->db->insert_id();
    }

    public function get_all_testimonial()
    {
        $testimonials =  $this->db->select('*')->from('testimonial')->get();
        return $testimonials->result_array();
    }

    public function get_single_testimonial($id)
    {
        $data = $this->db->get_where( 'testimonial', ['id'=>$id] );
        return $data->result_array();

    }

    public function update_testimonial($testimonial)
    {
        $this->db->where('id',$testimonial['id'])->update('testimonial',$testimonial);
        return true;
    }
        public function delete_testimonial($id)
    {
        $this->db->where('id',$id)->delete('testimonial');
    }
}