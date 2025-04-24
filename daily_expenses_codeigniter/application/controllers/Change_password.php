<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('Login_controller');
		}
    }
	public function index()
    {
        $this->form_validation->set_rules('current', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('new', 'Password', 'required|min_length[6]');
        
        if($this->input->post('submit')){
        $current=$this->input->post('current');
        $new=$this->input->post('new');

        $id=$this->session->userdata('id');
        $this->load->model('Change_model');
        $current_password = $this->Change_model->get_password($id);

        $dbcurrent=$current_password->password;
        if($current==$dbcurrent){
            $this->Change_model->update_password($id,$new);
            $this->session->set_flashdata('Success');
            redirect('Change_password');
        }
        else{
            $this->session->set_flashdata('error');
            redirect('Change_password');
        }

    }
    else{
        $this->load->view('change_password');
    }
}
}
?>