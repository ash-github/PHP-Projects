<?php
class Change_model extends CI_Model
{
  
    public function get_password($id)
    { 
        $query=$this->db->where('id',$id)
        ->get('user');
        if($query->num_rows()>0){
            return $query->row();
        }
    }  

    public function update_password($id,$new)
    { 
        $data=array('password'=>$new);
        return $this->db->where(['id'=>$id])->
        update('user',$data);
    } 

}
?>