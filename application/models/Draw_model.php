
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Draw_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  public function form_submit()
  {
    $form_data = $this->input->post();
		$limit = $form_data['limit'];

		// SELECT column FROM table
		// ORDER BY RAND()
		// LIMIT 1
		$check_draw_results = $this->check_draw_results();
		if($check_draw_results->num_rows() == 0) {
			$submit_draw = $this->db->query("select id from forms order by RAND() limit ".$limit)->result_array();

			$draw_date = date("Y-m-d H:i:s");
			foreach ($submit_draw as $key => $value) {
				$data = array(
					"form_id" => $value["id"],
					"draw_date" => $draw_date,
					"created_at" => $draw_date,
					"draw_order" => $key+1,
				);
				$this->db->insert('draws', $data);
			}
		}

		$get_draw_results = $this->get_draw_results();
		return $get_draw_results;
  }

	public function check_draw_results(){
		return $this->db->select('*')->from('draws')->get();
	}

	public function get_draw_results(){
		return $this->db->query(
						"SELECT draws.draw_date, draws.draw_order, forms.firstname, forms.lastname, CONCAT(substring(forms.contactnumber,1,1),'xxxxx',SUBSTRING(forms.contactnumber, LENGTH(forms.contactnumber)-2, LENGTH(forms.contactnumber))) AS contactnumber
			FROM draws, forms
			WHERE draws.form_id=forms.id
			ORDER BY draw_order"
		)->result_array();
	}
}

/* End of file Draw_model.php */
/* Location: ./application/models/Draw_model.php */
