<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}
		//model loader
		$this->load->model('admin/Admin_model','admin_model');
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
		$this->form_validation->set_rules('lama', 'Lama', 'trim|required', [
			'required' => 'Password Lama Wajib diisi',
		]);

		$this->form_validation->set_rules('baru', 'Baru', 'trim|required', [
			'required' => 'Password Baru Wajib diisi',
		]);

		$this->form_validation->set_rules('konfirm', 'Konfirm', 'trim|required', [
			'required' => 'Konfirmasi Password Baru Wajib diisi',
		]);
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->form_validation->run() == false) {
			$data['title'] = "Ganti Password - IHSAO";
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/vw_gantipassword", $data);
			$this->load->view("admin/layout/footer", $data);

		} else {
			$lama = str_replace("'", "", htmlspecialchars($this->input->post('lama'), ENT_QUOTES));
            $baru = str_replace("'", "", htmlspecialchars($this->input->post('baru'), ENT_QUOTES));
			$konfirm = str_replace("'", "", htmlspecialchars($this->input->post('konfirm'), ENT_QUOTES));

			if ($data['admin']) {
				if (password_verify($lama, $data['admin']['password'])) { //if old password is valid
					if($baru==$konfirm){
						$data = [
							'password' => password_hash($baru, PASSWORD_DEFAULT),
							'updated' => date('Y-m-d H:i:s'),
						];
						$this->admin_model->update(['id' => $this->session->userdata('id')], $data);
						$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Success!</strong> Password berhasil diganti</div> ');
						redirect(base_url('admin/profile/gantipassword'));
					}else{
						//if password confirmation and new password not same
						$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Konfirmasi password tidak valid, mohon periksa kembali</div> ');
						redirect(base_url('admin/profile/gantipassword'));
					}
				} else {
					//if old password is notvalid
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Error!</strong> Password lama tidak valid, mohon periksa kembali</div> ');
					redirect(base_url('admin/profile/gantipassword'));
				}
			} 
		}	

	}
}
