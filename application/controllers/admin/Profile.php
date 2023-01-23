<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}
	}

	public function index()
	{
		exit;
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('admin/dashboard')){
			redirect(base_url('admin/dashboard'));
		}

		$data['title'] = "Profile - IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/vw_profile", $data);
		$this->load->view("admin/layout/footer", $data);

	}

    
	public function gantipassword()
	{
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('admin/dashboard')){
			redirect(base_url('admin/dashboard'));
		}

		$data['title'] = "Ganti Password - IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/vw_gantipassword", $data);
		$this->load->view("admin/layout/footer", $data);

	}
}
