<?php
class Login_model extends CI_Model
{
public function login($email, $pass) {
    $data=array('email'=>$email,'password'=>$pass);
    $query = $this->db->where($data);
    $login= $this->db->get('user');
    if($login!=NULL)
    {
        return $login->row();
        redirect("Dashboard");
    }
    else{
        $this->session->set_flashdata('error');
        redirect('Login_controller');
    }
}
}