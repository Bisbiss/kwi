<?php
Class cetakForm extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $where = $this->session->userdata('npm');

        $data = $this->db->get_where("form",["npm" =>$where])->row();

        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->SetMargins(30, 3);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',12);
        // mencetak string 
        $pdf->Cell(0,20,'FORMULIR PENDAFTARAN KWI XXX',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(50,6,'NPM',0,0);
        $pdf->Cell(5,6,':',0,0);
        $pdf->Cell(30,8,$data->npm,0,1);
        $pdf->Cell(50,10,'Nama Lengkap',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->nama,0,1);
        $pdf->Cell(50,10,'Jurusan',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->jurusan,0,1);
        $pdf->Cell(50,10,'No Hp',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->nohp,0,1);
        $pdf->Cell(50,10,'No Hp Orang Tua',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->nohp_ortu,0,1);
        $pdf->Cell(50,10,'Alamat',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->alamat_rumah,0,1);
        $pdf->Cell(50,10,'Alamat Kosan',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->alamat_kos,0,1);
        $pdf->Cell(50,10,'Riwayat Penyakit',0,0);
        $pdf->Cell(5,10,':',0,0);
        $pdf->Cell(30,8,$data->riwayat_penyakit,0,1);
        $pdf->Cell(100,10,'',0,0);
        $pdf->Cell(35,10,'Bandar Lampung,',0,0);
        $pdf->Cell(0,10,date('d M Y'),0,1);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(0,10,"",0,1);
        $pdf->Cell(100,10,"",0,0);
        $pdf->Cell(0,0,$data->nama,0,1);
        $pdf->Cell(100,0,"",0,0);
        $pdf->Cell(0,10,$data->npm,0,1);
        $pdf->Output();
    }

    function laporan(){
        $no = 1;
        $data = $this->db->get("form")->result();
        // echo $data->nama;
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->SetMargins(8, 3);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',12);
        // mencetak string 
        $pdf->Cell(0,20,'DAFTAR PENDAFTAR KWI XXX',0,1,'C');
        $pdf->Cell(10,5,'No',1,0);
        $pdf->Cell(50,5,'Nama Lengkap',1,0);
        $pdf->Cell(30,5,'Jurusan',1,0);
        $pdf->Cell(30,5,'No Hp',1,0);
        $pdf->Cell(30,5,'No Hp Ortu',1,0);
        $pdf->Cell(45,5,'Alamat',1,0);
        $pdf->Cell(45,5,'Alamat Kosan',1,0);
        $pdf->Cell(40,5,'Riwayat Penyakit',1,1);
        $pdf->SetFont('Times','',10);
        foreach ($data as $data) {
            $pdf->Cell(10,5,$no,1,0);
            $pdf->Cell(50,5,$data->nama,1,0);
            $pdf->Cell(30,5,$data->jurusan,1,0);
            $pdf->Cell(30,5,$data->nohp,1,0);
            $pdf->Cell(30,5,$data->nohp_ortu,1,0);
            $pdf->Cell(45,5,$data->alamat_rumah,1,0);
            $pdf->Cell(45,5,$data->alamat_kos,1,0);
            $pdf->Cell(40,5,$data->riwayat_penyakit,1,1);
            $no++;
        }

        $pdf->Output();
    }
}