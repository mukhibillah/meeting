<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
		
	}

	public function index()
	{
		$data['title'] = 'Home'; 
		$data['meetings'] = $this->Meeting_model->get_all(); 
	
		$this->load->view('templates/header',$data);
		$this->load->view('homeview', $data);
		$this->load->view('templates/footer');
	}
} 