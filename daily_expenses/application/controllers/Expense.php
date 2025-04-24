<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('Login_controller');
		}
    }
public function add()
{
    $this->form_validation->set_rules('item','Item','required');
    $this->form_validation->set_rules('cost','Cost','required');
    $this->form_validation->set_rules('date','Expense_Date','required');
    if($this->input->post('submit')){
        $item=$this->input->post('item');
		$cost=$this->input->post('cost');
        $date=$this->input->post('date');
        $id=$this->session->userdata('id');
        $this->load->model('Expense_model');
        $this->Expense_model->add($id,$date,$item,$cost);   
    }
    else{
        $this->load->view('add_expense');
    }
}

public function manage(){
    $id=$this->session->userdata('id');
    $this->load->model('Expense_model');
    $expensedetail=$this->Expense_model->manage_data($id);
    $this->load->view('manage_expense',['expensedetail'=>$expensedetail]);
}

public function delete($id)
{
    $this->load->model('Expense_model');
    $this->Expense_model->delete($id);
    $id=$this->session->set_flashdata('success');
    redirect('Expense/manage');
}
}
