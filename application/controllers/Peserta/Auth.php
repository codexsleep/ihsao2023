<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('pemail')) {
			redirect(base_url('peserta/beranda'));
		} else {
			redirect(base_url('peserta/auth/login'));
		}
	}

	public function login()
	{
		if ($this->session->userdata('pemail')) {
			redirect(base_url('peserta/beranda'));
		}
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'valid_email' => 'Email harus valid',
			'required' => 'Email wajib diisi',
		]);

		$this->form_validation->set_rules('nis', 'Nis', 'trim|required', [
			'required' => 'Nis Wajib diisi',
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Log In | Peserta IHSAO";
			$this->load->view("peserta/auth/vw_login", $data);
		} else {
			$email = str_replace("'", "", htmlspecialchars($this->input->post('email'), ENT_QUOTES));
            $nis = str_replace("'", "", htmlspecialchars($this->input->post('nis'), ENT_QUOTES));
			$peserta = $this->db->get_where('tbl_peserta', ['email' => $email])->row_array();
			if ($peserta) {
				if ($nis==$peserta['nis']) {
					$datasession = [
						'pemail' => $peserta['email'],
						'pnis' => $peserta['nis'],
						'pid' => $peserta['id'],
					];
					$this->session->set_userdata($datasession);
					redirect(base_url('peserta/beranda'));
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Email atau Nis anda salah</div> ');
					redirect(base_url('peserta/auth/login'));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Email atau Nis anda salah</div> ');
				redirect(base_url('peserta/auth/login'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('peserta/auth/login'));
	}
}
