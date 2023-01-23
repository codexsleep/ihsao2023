<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}
		$this->load->model('admin/Dashboard_model','dashboard_model');
	}

	public function index()
	{
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('admin/dashboard')){
			redirect(base_url('admin/dashboard'));
		}

		$data['title'] = "Dashboard - IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['count'] = $this->dashboard_model->count();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/vw_dashboard", $data);
		$this->load->view("admin/layout/footer", $data);

	}
}
