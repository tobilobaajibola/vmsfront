<?php
class Apis extends CI_Controller{

	function verify_host($employee_id){
		// first verify the company account
		// then verify if host account is still active

	}
	function api_create_appointments(){
		$this->form_validation->set_rules('first_name', 'Name', 'required');
			 echo  json_encode(['success'=> 'Appointment successfully booked']);
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
		}
		else{

			// verify_app_owner();
			// // get the employee id from the submitted employee name
   //          $company_id = $data['employee_data']['company_id'];
			// $host_id  = $data['employee_data']['employee_id'];
			// $location_id = $data['employee_data']['location_id'];

			$company_id = 1;
			$host_id  = 1;
			$location_id = 1;
			submit_appointment_helper($host_id, $company_id, $location_id);

			

  		}
	}

	function api_list_host_appointments(){
		$company_id = 1;
		$host_id  = 1;
		$location_id = 1;

		$data['list_appointment'] = $this->Appointment->list_host_appointment($company_id, $host_id);

		// $data = array('first_name' =>$data['list_appointment'][' employee_firstname']);

		// foreach ($data['list_appointment']as $list_appointments) {
			echo  json_encode(['data'=>$data['list_appointment']]);
		// }


	}
	
	function api_visitor_history(){
		$company_id = 1;
		$host_id  = 1;
		$visitor_id = 1;
		$data['visit_history'] = $this->Visitor->get_visit_history($company_id, $host_id, $visitor_id);
		echo json_encode(['data'=>$data['visit_history']]);
	}

	function api_checkin_details($checkin_id){
		// decrypt
		$data['checkin_detail'] = $this->Visitor->view_visitor_tag ($checkin_id);
		echo json_encode(['data'=>$data['checkin_detail']]);

	}

}

?>