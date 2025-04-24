<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('Login_controller');
		}
    }
	public function today()
    {
        $this->form_validation->set_rules('fdate','Fdate','required');
        $this->form_validation->set_rules('tdate ','Tdate','required');
        if($this->input->post('submit')){
            $from=$this->input->post('fdate');
            $to=$this->input->post('tdate');
            $id=$this->session->userdata('id');
            $this->load->model('Report_model');
            $this->Report_model->today_data($from,$to,$id);
        $report_detail=$this->Report_model->today_data($from,$to,$id);
        $this->load->view('today_wise',['report_detail'=>$report_detail,'from'=>$from,'to'=>$to]);

        }
        else{
            $this->load->view('today');
        }
    }

    public function month()
    {
        $this->form_validation->set_rules('fdate','Fdate','required');
        $this->form_validation->set_rules('tdate ','Tdate','required');
        if($this->input->post('submit')){
            $from=$this->input->post('fdate');
            $to=$this->input->post('tdate');
            $id=$this->session->userdata('id');
            $this->load->model('Report_model');
            $this->Report_model->month_data($from,$to,$id);
        $report_detail=$this->Report_model->month_data($from,$to,$id);
        $this->load->view('month_wise',['report_detail'=>$report_detail,'from'=>$from,'to'=>$to]);

        }
        else{
            $this->load->view('month');
        }
    }

    public function year()
    {
        $this->form_validation->set_rules('fdate','Fdate','required');
        $this->form_validation->set_rules('tdate ','Tdate','required');
        if($this->input->post('submit')){
            $from=$this->input->post('fdate');
            $to=$this->input->post('tdate');
            $id=$this->session->userdata('id');
            $this->load->model('Report_model');
            $this->Report_model->year_data($from,$to,$id);
        $report_detail=$this->Report_model->year_data($from,$to,$id);
        $this->load->view('year_wise',['report_detail'=>$report_detail,'from'=>$from,'to'=>$to]);

        }
        else{
            $this->load->view('year');
        }
    }
}
