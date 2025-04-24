<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	public function index()
	{
		$this->form_validation->set_rules('email','Email Id','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('pass','Password','required|min_length[7]');
		if($this->input->post('submit'))
		{
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
			$this->load->model('Login_model');
			$this->Login_model->login($email,$pass);
            $valid = $this->Login_model->login($email,$pass);
            if($valid){
                $this->session->set_userdata('id',$valid->id);
                redirect('Dashboard');
            }
            else{
                $this->session->set_flashdata('error','invalid login');
                redirect('Login_controller');
            }
		}
		else
		{
			$this->load->view('login');
		}	
	}
}
