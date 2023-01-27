<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		if (!$this->session->userdata('pemail')) {
			redirect(base_url('peserta/auth/login'));
		}

		//model loader
		$this->load->model('peserta/Quiz_model','quiz_model');
		$this->load->model('peserta/Beranda_model','beranda_model');
	}

	public function index()
	{

		$data['title'] = "Quiz - Peserta IHSAO";
		$data['peserta'] = $this->db->get_where('tbl_peserta', ['email' => $this->session->userdata('pemail')])->row_array();
		$this->load->view("peserta/layout/header", $data);
		$this->load->view("peserta/vw_quiz_objektif", $data);
		$this->load->view("peserta/layout/footer", $data);

	}

	public function objektif($quizid,$logid,$soalid)
	{
		
		$data['title'] = "Quiz Objektif - Peserta IHSAO";
		$data['peserta'] = $this->db->get_where('tbl_peserta', ['email' => $this->session->userdata('pemail')])->row_array();
		$data['countSoal'] = $this->quiz_model->getminmax_soal($logid);
		$data['obj'] = [
			'quiz' => $quizid,
			'log' => $logid,
			'soal' => $soalid,
		]; 
		$data['soal'] = $this->quiz_model->getSoalbyIdFromSoalLog($soalid);
		$data['allsoal'] = $this->quiz_model->getallsoalLog($logid);
		$data['logData'] = $this->quiz_model->getLognQuizData($logid);
		$this->form_validation->set_rules('option', 'Option', 'required', [
            'required' => 'Option Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
		$this->load->view("peserta/layout/header", $data);
		$this->load->view("peserta/vw_quiz_objektif", $data);
		$this->load->view("peserta/layout/footer", $data);
		}else{
			$upsoal = [
				'answare' => str_replace("'", "", htmlspecialchars($this->input->post('option',TRUE),ENT_QUOTES)),
			];
			$this->quiz_model->updateAnsware(['id' => $soalid], $upsoal);
			if(isset($_POST['prev'])){
				$redirecturl = base_url('peserta/quiz/objektif/').$quizid.'/'.$logid.'/'.$soalid-1;
			}elseif(isset($_POST['next'])){
				$redirecturl =  base_url('peserta/quiz/objektif/').$quizid.'/'.$logid.'/'.$soalid+1;
			}elseif(isset($_POST['finish'])){
				$upqlog = [
					'status' => '2',
					'ended' => date('Y-m-d H:i:s'),
				];
				$this->quiz_model->updatequizLog(['id' => $logid], $upqlog);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Quiz telah di selesaikan</div>');
				$redirecturl = base_url('peserta/beranda');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi kesalahan, harap hubungi administrator</div>');
				$redirecturl = base_url('peserta/beranda');
			}
			redirect($redirecturl);
		}

	}


	public function generate_soal($quizid,$logid){
		$soalData = $this->beranda_model->getAvailable_Soal($logid); //cek apakah soal sudah pernah digenerate
		if($soalData){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Galat! Soal sudah pernah digenerate</div>');
			redirect('peserta/beranda');
		}else{
		$randomSoal = $this->quiz_model->getRandom_SoalObjektif($quizid);

		foreach ($randomSoal as $index => $value) {
			
			$data = [
                'quiz_log' => $logid,
				'multiple_choice_id' => $value['id'],
                'answare' => '-',
                'punishment' => '0',
            ];
            $this->quiz_model->generate_randomSoal($data);

			if($index === count($randomSoal)-1){
				$soalData = $this->beranda_model->getQuiz_Soal($logid); //get quiz_log_soal by logid
				//update log after genarated soal
				$datalogup = [
								'status' => '1',
								'started' => date('Y-m-d H:i:s'),
							];
				$this->quiz_model->updatelog(['id' => $logid], $datalogup);
				redirect('peserta/quiz/objektif/'.$quizid.'/'.$logid.'/'.$soalData['id']);
			}
		}
		}
	}


    public function punishment($soalid){
		$datasoalpun = [
			'punishment' => '1',
		];
		$this->quiz_model->punishment(['id' => $soalid], $datasoalpun);
        echo 'Ctrl+C pressed';
    }
}
