<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Draw extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Draw_model');
	}

	public function index()
	{
		$this->load->helper('form');

		if(count($this->input->post()) == 0 ) {
			$draw_results = $this->check_draw_results();
			if($draw_results->num_rows()==0) {
				$this->load->view('draw_home');
			} else {
				$get_draw_results = $this->Draw_model->get_draw_results();
				$data["draw_results"] = $get_draw_results;
				$this->load->view('draw_results', $data);
			}
		} else {
			$form_submission = $this->Draw_model->form_submit();
			$data["draw_results"] = $form_submission;
			$this->load->view('draw_results', $data);
		}
	}

	public function check_draw_results() {
		return $this->Draw_model->check_draw_results();
	}

	public function strange() {
		$JSONtitle = '[{
			 "en": "Doctor Strange in the Multiverse of Madness"
			}, {
			 "fr": "Docteur Strange dans le multivers de la folie"
			}, {
			 "es": "Doctor Strange en el multiverso de la locura"
			}, {
			 "pt": "Doutor Estranho no Multiverso da Loucura"
			}, {
			 "tr": "Doktor Strange: Çoklu Evren Çılgınlığında"
			}]';

			$title = json_decode($JSONtitle,true);
			echo current($title)["en"];
	}
}
