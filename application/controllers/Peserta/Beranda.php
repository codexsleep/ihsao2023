<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('pemail')) {
			redirect(base_url('peserta/auth/login'));
		}
	}

	public function index()
	{
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('peserta/beranda')){
			redirect(base_url('peserta/beranda'));
		}

		$data['title'] = "Beranda - Peserta IHSAO";
		$data['peserta'] = $this->db->get_where('tbl_peserta', ['email' => $this->session->userdata('pemail')])->row_array();
		$this->load->view("peserta/layout/header", $data);
		$this->load->view("peserta/vw_beranda", $data);
		$this->load->view("peserta/layout/footer", $data);

	}
}
