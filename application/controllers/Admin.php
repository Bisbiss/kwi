<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelForm');
	
		if($this->session->userdata('npm') != 'bemfmipa'){
			redirect(base_url("Welcome"));
		}
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('Admin/menu');
		$this->load->view('Admin/index');
		$this->load->view('template/foot');
	}

	public function pendaftar()
	{
		$data["form"] = $this->ModelForm->get();

		$this->load->view('template/head');
		$this->load->view('Admin/menu');
		$this->load->view('Admin/pendaftar',$data);
		$this->load->view('template/foot');
	}

	public function upload()
	{
		$this->load->view('template/head');
		$this->load->view('Admin/menu');
		$this->load->view('Admin/upload');
		$this->load->view('template/foot');
	}
}