<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}

		//model loader
		$this->load->model('admin/Soal_model','soal_model');

	}

	public function index()
	{
		redirect('admin/quiz');
	}

	public function quiz($id){
		$data['title'] = "Bank Soal - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['soal'] = $this->soal_model->get($id);
		$data['ide'] =  $id;
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/page/soal/vw_soal", $data);
		$this->load->view("admin/layout/footer", $data);
	}

	public function tambah($id)
	{
		$data['title'] = "Tambah Soal - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['ide'] =  $id;
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required', [
            'required' => 'Pertanyaan Soal Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/soal/vw_tambah_soal", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'quiz_id' => $id,
				'question' => $this->input->post('pertanyaan'),
				'option_a' => str_replace("'", "", $this->input->post('opsia')),
				'option_b' => str_replace("'", "", $this->input->post('opsib')),
				'option_c' => str_replace("'", "", $this->input->post('opsic')),
				'option_d' => str_replace("'", "", $this->input->post('opsid')),
				'option_e' => str_replace("'", "", $this->input->post('opsie')),
				'answare' => str_replace("'", "", $this->input->post('jawaban')),
                'created' => date('Y-m-d H:i:s'),
            ];
            $this->soal_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/soal/tambah/'.$id);
        }

	}

	public function edit($id)
	{
		$data['title'] = "Edit Soal - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['soal'] = $this->soal_model->getById($id);
		$data['ide'] =  $data['soal']['quiz_id'];
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required', [
            'required' => 'Pertanyaan Soal Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/soal/vw_edit_soal", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
				'question' => $this->input->post('pertanyaan'),
				'option_a' => str_replace("'", "", $this->input->post('opsia')),
				'option_b' => str_replace("'", "", $this->input->post('opsib')),
				'option_c' => str_replace("'", "", $this->input->post('opsic')),
				'option_d' => str_replace("'", "", $this->input->post('opsid')),
				'option_e' => str_replace("'", "", $this->input->post('opsie')),
				'answare' => str_replace("'", "", $this->input->post('jawaban')),
				'updated' => date('Y-m-d H:i:s'),
            ];
            $this->soal_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
            redirect('admin/soal/edit/'.$id);
        }

	}


	public function hapus($q,$id)
	{
		$this->soal_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect('admin/soal/quiz/'.$q);
	}


	public function detail($id){
		$data['title'] = "Detail Soal - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['soal'] = $this->soal_model->getById($id);
		$data['ide'] =  $data['soal']['quiz_id'];
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/page/soal/vw_detail", $data);
		$this->load->view("admin/layout/footer", $data);
	}


}
