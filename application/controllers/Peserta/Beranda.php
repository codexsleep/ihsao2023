<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('pemail')) {
			redirect(base_url('peserta/auth/login'));
		}
		$this->load->model('peserta/Beranda_model','beranda_model');

	}

	public function index()
	{
		//mengecek apakah halaman di akses dengan alamat yang benar
		if(current_url()!=base_url('peserta/beranda')){
			redirect(base_url('peserta/beranda'));
		}

		$data['title'] = "Beranda - Peserta IHSAO";
		$data['peserta'] = $this->db->get_where('tbl_peserta', ['email' => $this->session->userdata('pemail')])->row_array();
		$pesertaid = $this->session->userdata('pid');

        $this->form_validation->set_rules('token', 'Token', 'required', [
            'required' => 'Token Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
			$data['QuizLog'] = $this->beranda_model->getQuizLog_byPesertaId($pesertaid); //mengambil quiz log berdasarkan peserta
			$this->load->view("peserta/layout/header", $data);
			$this->load->view("peserta/vw_beranda", $data);
			$this->load->view("peserta/layout/footer", $data);
        } else {
			$token = str_replace("'", "", htmlspecialchars($this->input->post('token',TRUE),ENT_QUOTES));
			$quizData = $this->beranda_model->getQuiz_byToken($token); //get quiz data
			if($quizData){//jika token quiz ada
				$logData = $this->beranda_model->getQuizLog_byQuiz_Peserta($quizData['id'],$pesertaid); //get quiz log
				if(!$logData){ //cek apakah token sudah ada di log peserta
					if($quizData['type']==1){ //jika soal objektif
						$soalData = $this->beranda_model->getMultipleChoise_SoalbyQuizId($quizData['id']);
							$data = [
								'quiz_id' => $quizData['id'],
								'peserta_id' => $pesertaid,
								'status' => '0',
							];
							$this->beranda_model->insertQuizLog($data); //mengambahkan quiz log
							$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Quiz berhasil ditambahkan!</div>');
					}else{
						$soalData = $this->beranda_model->getQuizEsay_byQuzId($quizData['id']);
						echo $soalData['quiz_id'];
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Quiz berhasil ditambahkan!</div>');

					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Quiz sudah pernah ditambahkan!</div>');
				}
				
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Quiz tidak terdaftar!</div>');
			}
            redirect('peserta/beranda');
        }
	}

	public function tester(){
		$target_time = strtotime('2023-01-24 19:00:00');
		$waktu = 2*60;
		$result =  date('Y-m-d H:i:s', $waktu+$target_time);
		echo $result;
	}

}
