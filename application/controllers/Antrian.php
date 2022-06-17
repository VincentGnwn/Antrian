<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mrPatient_model');
	  }

	public function index()
	{
		$data['belumDitimbang'] = $this->mrPatient_model->getBelumDitimbang();
		$data['sedangDitimbang'] = $this->mrPatient_model->getSedangDitimbang();
		$data['belumDipanggil'] = $this->mrPatient_model->getPasienBelumDipanggil();
		$data['sedangDipanggil'] = $this->mrPatient_model->getSedangDipanggil();
		// $data['sedangNamaDipanggil'] = $this->mrPatient_model->getNamaSedangDipanggil();
		$data['sudahDipanggil'] = $this->mrPatient_model->getSudahDipanggil();
        $this->load->view('templates/antrian_Header');
		$this->load->view('antrian/index',$data);
        $this->load->view('templates/antrian_Header');
	}
}
