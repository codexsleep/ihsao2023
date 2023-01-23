<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}

		//model loader
		$this->load->model('admin/Peserta_model','peserta_model');

	}

	public function index()
	{

		$data['title'] = "Peserta - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['peserta'] = $this->peserta_model->get();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/page/peserta/vw_peserta", $data);
		$this->load->view("admin/layout/footer", $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Peserta - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Peserta Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/peserta/vw_tambah_peserta", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'nama' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
				'email' => str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES)),
                'nis' => str_replace("'", "", htmlspecialchars($this->input->post('nis',TRUE),ENT_QUOTES)),
                'asal_sekolah' => str_replace("'", "", htmlspecialchars($this->input->post('sekolah',TRUE),ENT_QUOTES)),
                'status' => 1,
				'created' => date('Y-m-d H:i:s'),
            ];
            $this->peserta_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/peserta/tambah');
        }

	}

	public function edit($id)
	{
		$data['title'] = "Edit Peserta - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['peserta'] = $this->peserta_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Peserta Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/peserta/vw_edit_peserta", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'nama' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
				'email' => str_replace("'", "", htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES)),
                'nis' => str_replace("'", "", htmlspecialchars($this->input->post('nis',TRUE),ENT_QUOTES)),
                'asal_sekolah' => str_replace("'", "", htmlspecialchars($this->input->post('sekolah',TRUE),ENT_QUOTES)),
				'updated' => date('Y-m-d H:i:s'),
            ];
            $this->peserta_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
            redirect('admin/peserta/edit/'.$id);
        }

	}


	public function hapus($id)
	{
		$this->peserta_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect('admin/peserta');
	}


}
