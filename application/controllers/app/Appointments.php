<?php
/**
 * 
 */
class Appointments extends CI_Controller
{
	
	  function add_appointments(){
	  	$this->form_validation->set_rules('employeename', 'Employee', 'required');
		$this->form_validation->set_rules('first_name', 'Name', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
		}
		else{
			$appointment_id = mt_rand();
			// get the employee id from the submitted employee name
			$employeename = $this->input->post('employeename');
            $company_id = $_SESSION['admin_account']['company_id'];
			$host_id = get_employee_id_from_full_name($employeename, $company_id);    
            // call the appointment submittion 
			submit_appointment_helper($host_id, $company_id);
	      		}
	      	}


	   function check_in_appointments(){
	   		// confirm if the appoitnment code is valid
				
	   		$appointment_code= $this->input->post('appointment_code');
	   		$company_id = $this->input->post('company_id');
			$data['verify_appointment'] = $this->Appointment->check_for_appointment($appointment_code, $company_id);
			// var_dump($data['verify_appointment']);
			// if appointment exists or is valid
			if(!empty($data['verify_appointment'])){
			//Get details of visitor

			// verify if visitor has been here before
			$data['verify_datas'] = $this->Visitor->verify_vistor_pre_visit($data['verify_appointment']['email'], $data['verify_appointment']['phone'], $company_id);

			// Get Visitor's details from appointment table and add it to visitor's table
			$visitor_data  = array(
	      					'company_id' => $data['verify_appointment']['company_id'],
							'firstname' => $data['verify_appointment']['firstname'],
							'lastname' => $data['verify_appointment']['lastname'],
							'email' => $data['verify_appointment']['email'],
							'phone' => $data['verify_appointment']['phone'],
							'organization' => $data['verify_appointment']['organization']
						);

			// verify if the appointment has been previously checked in
			if($data['verify_appointment']['end_date'] >= date('Y-m-d')  or $data['verify_appointment']['status'] == 0 ){


			// if visitor has not been here before do the following
			if(empty($data['verify_datas'])){

			// get the data of visitor to be posted to checkin table
	      	$this->Visitor->add_visitor($visitor_data);
	      	// get id of last insert
	      	$visitor_id = $this->db->insert_id();
	      	//add welcome message
	      	$welcome_message = "Welcome to the bank of the future";
	      }
	     
	      
			else{
				// get the visitor's detail
				$visitor_id = $data['verify_datas']['id'];
				$welcome_message = "We are Happy to have you back";
			}

	        // check in the visitor after registration or verification
	      	$visitor_id = $visitor_id;
	      	$company_id = $data['verify_appointment']['company_id'];
	      	$employee_id = $data['verify_appointment']['employee_id'];
	      	$appointment_id = $data['verify_appointment']['id'];
	      	$purpose = $data['verify_appointment']['purpose'];
		
			checkin_helper_function($company_id, $visitor_id, $employee_id, $appointment_id, $welcome_message, $purpose);
	   }
	   // send error message if the appointment has been previously cheked in
	     else{
	     	
	     		$data['response_msg'] = 'This code has already been used or expired';
           		echo json_encode(['error'=>$data['response_msg']]);
	     }
}

	   else{
	   			$data['response_msg'] = 'Incorrect Access code';
           		echo json_encode(['error'=>$data['response_msg']]);
	   }
	}
}
?>