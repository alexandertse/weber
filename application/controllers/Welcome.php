<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|numeric|min_length[8]|max_length[8]');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="error_join">','</span>');

		$data= array();
		if($this->form_validation->run() == false ) {
			$this->load->view('weber_welcome');
		} else {
			$form_submission = $this->Welcome_model->form_submit();

			if(!$form_submission['form_submitted']) {
				$data['join_error'] = $form_submission['error_message'];
				$this->load->view('weber_welcome', $data);
			} else {
				$this->load->view('weber_success');
			}
		}
	}
}
