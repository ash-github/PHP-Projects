<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {
	public function index()
	{
		$this->form_validation->set_rules('full_name','Full Name','required|alpha');
		$this->form_validation->set_rules('email','Email Id','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('mobile_no','Mobile Number','required|exact_length[12]');
		$this->form_validation->set_rules('password','Password','required|min_length[7]');
		if($this->input->post('submit'))
		{
			$name=$this->input->post('full_name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile_no');
			$pass=$this->input->post('password');
			$this->load->model('Signup_model');
			$this->Signup_model->insert1($name,$email,$mobile,$pass);
		}
		else
		{
			$this->load->view('sign_up');
		}	
	}
}
