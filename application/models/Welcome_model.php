
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  public function form_submit()
  {
    $form_data = $this->input->post();

    $email = $form_data["email_address"];
    $phone = $form_data["contact_number"];
    $check_db = $this->check_submission_info($email, $phone);
    if($check_db->num_rows() > 0) {
      return array(
        'form_submitted' => false,
        'error_message' => 'The email address or contact number has already been submitted.',
      );
    } else {
      $this->insert_submission_info($form_data);
      return array(
  			'form_submitted' => true,
  			'error_message' => '',
  		);
    }
  }

  private function check_submission_info($email, $phone)
	{
		return $this->db->select('*')->from('forms')->where('email',$email)->or_where('contactnumber',$phone)->get();
	}

  private function insert_submission_info($form_data)
  {
    $data = array(
      'firstname' => $form_data['first_name'],
      'lastname' => $form_data['last_name'],
      'gender' => $form_data['gender'],
      'email' => $form_data['email_address'],
      'contactnumber' => $form_data['contact_number'],
      'dateofbirth' => $form_data['date'],
      'created_at' => date("Y-m-d H:i:s"),
    );
    $this->db->insert('forms', $data);
    return $this->db->insert_id();
  }

}

/* End of file Welcome_model.php */
/* Location: ./application/models/Welcome_model.php */
