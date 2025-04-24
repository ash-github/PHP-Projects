<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('Login_controller');
		}
    }
	public function index()
    {
        $id=$this->session->userdata('id');
        $this->load->model('Profile_model');
        $profile_detail=$this->Profile_model->get_detail($id);
        $this->load->view('profile',['profile'=>$profile_detail]);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|alpha');
	 	$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|exact_length[12]');
        if($this->input->post('submit')){
            $name=$this->input->post('name');
            $mobile=$this->input->post('mobile');
            $id=$this->session->userdata('id');
            $this->load->model('Profile_model');
            $profile_detail=$this->Profile_model->update($id,$name,$mobile);
            $this->session->flashdata('success');
            redirect('Profile');
        }
        else{
            $this->session->flashdata('error');
            redirect('Profile');
        }
    }
    
}
?>