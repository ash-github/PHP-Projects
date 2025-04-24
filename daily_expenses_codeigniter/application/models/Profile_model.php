<?php
class Profile_model extends CI_Model
{
public function get_detail($id){
    $query=$this->db->select('full_name, email, mobile_no, reg_date') 
    ->where('id',$id)
    ->from('user')
    ->get();
    return $query->row();
}
public function update($id,$name,$mobile){
    $data=array('full_name'=>$name,'mobile_no'=>$mobile);
    $query=$this->db->where('id',$id)
    ->update('user',$data);
}
}