<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('email')) {
			redirect(base_url('admin/auth/login'));
		}

		//model loader
		$this->load->model('admin/Quiz_model','quiz_model');

	}

	public function index()
	{
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('admin/quiz')){
			redirect(base_url('admin/quiz'));
		}

		$data['title'] = "Quiz - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['quiz'] = $this->quiz_model->get();
		$this->load->view("admin/layout/header", $data);
		$this->load->view("admin/page/quiz/vw_quiz", $data);
		$this->load->view("admin/layout/footer", $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Quiz - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Quiz Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/quiz/vw_tambah_quiz", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'name' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
				'token' => base_convert(microtime(false), 10, 36),
                'duration' => str_replace("'", "", htmlspecialchars($this->input->post('durasi',TRUE),ENT_QUOTES)),
                'start_time' => date('Y-m-d', strtotime(str_replace("'", "", htmlspecialchars($this->input->post('mulaidate',TRUE),ENT_QUOTES)))).' '.str_replace("'", "", htmlspecialchars($this->input->post('mulaitime',TRUE),ENT_QUOTES)).':00',
                'end_time' => date('Y-m-d', strtotime(str_replace("'", "", htmlspecialchars($this->input->post('berakhirdate',TRUE),ENT_QUOTES)))).' '.str_replace("'", "", htmlspecialchars($this->input->post('berakhirtime',TRUE),ENT_QUOTES)).':00',
				'created' => date('Y-m-d H:i:s'),
            ];
            $this->quiz_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/quiz/tambah');
        }

	}

	public function edit($id)
	{
		$data['title'] = "Edit Quiz - Admin IHSAO";
		$data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['quiz'] = $this->quiz_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Quiz Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$this->load->view("admin/layout/header", $data);
			$this->load->view("admin/page/quiz/vw_edit_quiz", $data);
			$this->load->view("admin/layout/footer", $data);
        } else {
            $data = [
                'name' => str_replace("'", "", htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES)),
                'duration' => str_replace("'", "", htmlspecialchars($this->input->post('durasi',TRUE),ENT_QUOTES)),
                'start_time' => str_replace("'", "", htmlspecialchars($this->input->post('mulaidate',TRUE),ENT_QUOTES)).' '.str_replace("'", "", htmlspecialchars($this->input->post('mulaitime',TRUE),ENT_QUOTES)).':00',
                'end_time' => str_replace("'", "", htmlspecialchars($this->input->post('berakhirdate',TRUE),ENT_QUOTES)).' '.str_replace("'", "", htmlspecialchars($this->input->post('berakhirtime',TRUE),ENT_QUOTES)).':00',
				'updated' => date('Y-m-d H:i:s'),
            ];
            $this->quiz_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
            redirect('admin/quiz/edit/'.$id);
        }

	}


	public function hapus($id)
	{
		$this->quiz_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect('admin/quiz');
	}


}
