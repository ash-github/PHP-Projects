<?php
class Signup_model extends CI_Model
{
    public function insert1($name,$email,$mobile,$pass)
    {
        $data=array('full_name'=>$name,'email'=>$email,'mobile_no'=>$mobile,'password'=>$pass);
        $query=$this->db->insert('user',$data);

        if($query){
            $this->session->set_flashdata('success');
            redirect('Home');
        }
        else{
            $this->session->set_flashdata('error');
            redirect('Sign_up');
        }
    }
}