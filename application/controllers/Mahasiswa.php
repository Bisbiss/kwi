<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelForm');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Welcome"));
		}
		if($this->session->userdata('npm') == 'bemfmipa'){
			redirect(base_url("Admin"));
		}
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/menu');
		$this->load->view('mahasiswa/home');
		$this->load->view('template/foot');
	}

	public function form()
	{	
		$where = array(
			'npm' => $this->session->userdata('npm')
		);
		
		$cek = $this->ModelForm->cek_data("form",$where)->num_rows();
		
		if ($cek > 0) {
			$this->load->view('template/head');
			$this->load->view('template/menu');
			$this->load->view('mahasiswa/formDone');
			$this->load->view('template/foot');
		}
		else{
			$this->load->view('template/head');
			$this->load->view('template/menu');
			$this->load->view('mahasiswa/form', $this->session->userdata('npm'));
			$this->load->view('template/foot');
		}
	}

	public function form_submit(){
		$Npm = $this->input->post('inputNPM');
		$Nama = $this->input->post('inputName');
		$Jurusan = $this->input->post('Jurusan');
		$nohp = $this->input->post('inputNo');
		$nohp_ortu = $this->input->post('inputNoOrtu');
		$alamat_rumah = $this->input->post('inputAlamat');
		$alamat_kos = $this->input->post('inputAlamatKosan');
		$riwayat_penyakit = $this->input->post('inputEiwayatPenyakit');

		$data = array(
			'npm' => $Npm,
			'nama' => $Nama,
			'jurusan' => $Jurusan,
			'nohp' => $nohp,
			'nohp_ortu' => $nohp_ortu,
			'alamat_rumah' => $alamat_rumah,
			'alamat_kos' => $alamat_kos,
			'riwayat_penyakit' => $riwayat_penyakit
		);

		$this->ModelForm->insert($data);
		// redirect(base_url("mahasiswa/form?action=true"));
		redirect(base_url("mahasiswa/formDone"));

	}
	
	public function formDone()
	{
		$this->load->view('template/head');
		$this->load->view('template/menu');
		$this->load->view('mahasiswa/formDone');
		$this->load->view('template/foot');
	}

	public function kelompok()
	{
		$this->load->view('template/head');
		$this->load->view('template/menu');
		$this->load->view('mahasiswa/kelompok');
		$this->load->view('template/foot');
	}
}
