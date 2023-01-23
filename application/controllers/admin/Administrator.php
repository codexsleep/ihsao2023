<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

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

		$data['title'] = "Admin - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = $this->admin_model->get();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/page/admin/vw_admin", $data);
		$this->load->view("admin/layout/footer", $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Admin - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Admin Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/admin/vw_tambah_admin", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
			$password = str_replace("'", "", htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
			$options = [
    					'cost' => 12
			];
            $data = [
                'email' => str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES)),
				'password' => password_hash($password, PASSWORD_DEFAULT),
                'name' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
                'role' => str_replace("'", "", htmlspecialchars($this->input->post('role',TRUE),ENT_QUOTES)),
				'created' => date('Y-m-d H:i:s'),
            ];
            $this->admin_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/administrator/tambah');
        }

	}

	public function edit($id)
	{
		$data['title'] = "Edit Peserta - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['adminData'] = $this->admin_model->getById($id);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Admin Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/admin/vw_edit_admin", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
			$password = str_replace("'", "", htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
			$options = [
				'cost' => 12
			];
			if(!$password){
				$data = [
					'email' => str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES)),
					'name' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
					'role' => str_replace("'", "", htmlspecialchars($this->input->post('role',TRUE),ENT_QUOTES)),
					'updated' => date('Y-m-d H:i:s'),
				];
			}else{
				$data = [
					'email' => str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES)),
					'password' => password_hash($password, PASSWORD_DEFAULT),
					'name' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
					'role' => str_replace("'", "", htmlspecialchars($this->input->post('role',TRUE),ENT_QUOTES)),
					'updated' => date('Y-m-d H:i:s'),
				];
			}
            $this->admin_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
            redirect('admin/administrator/edit/'.$id);
        }

	}


	public function hapus($id)
	{
		$this->admin_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect('admin/administrator');
	}


}
