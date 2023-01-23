<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('pemail')) {
			redirect(base_url('peserta/auth/login'));
		}
	}

	public function index()
	{

		$data['title'] = "Quiz - Peserta IHSAO";
		$data['peserta'] = $this->db->get_where('tbl_peserta', ['email' => $this->session->userdata('pemail')])->row_array();
		$this->load->view("peserta/layout/header", $data);
		$this->load->view("peserta/vw_quiz_objektif", $data);
		$this->load->view("peserta/layout/footer", $data);

	}
}
