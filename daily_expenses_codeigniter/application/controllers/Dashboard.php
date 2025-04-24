<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

		$this->load->model('Dashboard_model');
		$today=$this->Dashboard_model->today_expenses($id);
		$day=$this->Dashboard_model->day_expenses($id);
		$month=$this->Dashboard_model->month_expenses($id);
		$year=$this->Dashboard_model->year_expenses($id);
		$total=$this->Dashboard_model->total_expenses($id);
		$this->load->view('dashboard',['temp'=>$today, 'dtemp'=>$day, 'mtemp'=>$month, 'ytemp'=>$year, 'totaltemp'=>$total]);

        $this->load->helper('url');
		//$this->load->model('Dashboard_model');
		//$today=$this->Dashboard_model->todaysexp($id);
		
	}
}
