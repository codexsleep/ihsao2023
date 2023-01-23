<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Auth_model');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect(base_url('admin/dashboard'));
		} else {
			redirect(base_url('admin/auth/login'));
		}
	}

	public function login()
	{
		if ($this->session->userdata('email')) {
			redirect(base_url('admin/dashboard'));
		}
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'valid_email' => 'Email harus valid',
			'required' => 'Email wajib diisi',
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password Wajib diisi',
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Log In | IHSAO";
			$this->load->view("admin/auth/vw_login", $data);
		} else {
			$email = str_replace("'", "", htmlspecialchars($this->input->post('email'), ENT_QUOTES));
            $password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));
			$admin = $this->db->get_where('tbl_admin', ['email' => $email])->row_array();
			if ($admin) {
				if (password_verify($password, $admin['password'])) {
					$datasession = [
						'email' => $admin['email'],
						'role' => $admin['role'],
						'id' => $admin['id'],
					];
					$this->Auth_model->update(['id' => $admin['id']], ['last_login' => date('Y-m-d H:i:s')]);
					$this->session->set_userdata($datasession);
					redirect(base_url('admin/dashboard'));
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Email atau password anda salah</div> ');
					redirect(base_url('admin/auth/login'));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Email atau password anda salah</div> ');
				redirect(base_url('admin/auth/login'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/auth/login'));
	}
}
