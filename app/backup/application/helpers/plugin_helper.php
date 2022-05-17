<?php
function get_employee_id_from_full_name($employeename, $company_id){
		$ci = & get_instance();
	// split thhe employeename to get the employee id from db
			if( strpos( $employeename, ' ' ) !== FALSE ){
    			$employeename = explode(' ', $employeename);
    	
					$firstname = $employeename[0];
					$lastname = $employeename[1];
			}

			// get the employee id the visitor wants to see
			$data['employee_data'] = $ci->Employee->get_employee_by_name($firstname, $lastname, $company_id);

			$employee_data = $data['employee_data'];
	      return $data['employee_data']['id'];
}



function submit_appointment_helper($host_id, $company_id){
	$data = array();
	$ci = & get_instance();
					$appointment_id = mt_rand();
	      			$appointment_data  = array(
	      					'company_id' =>  $company_id,
	      					'employee_id' => $host_id,
							'firstname' => $ci->input->post('first_name'),
							'lastname' => $ci->input->post('last_name'),
							'email' => $ci->input->post('email'),
							'phone' => $ci->input->post('phone_number'),
							'organization' => $ci->input->post('organization'),
							'appointment_code' => $appointment_id,
							'purpose' => $ci->input->post('purpose'),
							'expected_time' => $ci->input->post('expected_time'),
							'expected_date' => $ci->input->post('expected_date'),
							'message' => $ci->input->post('message')
						);
	      	$ci->Appointment->add_appointment($appointment_data);
			if ($ci->db->affected_rows() > 0) {
				
				if($ci->input->post('sendinvite')=='on'){
					// send email to visitor
					$ci->email->from('visitor@skorebot.com', 'New Appointment');
           			$ci->email->to($appointment_data['email']);
	                $ci->email->subject('New Appointment');
	                $ci->email->message($ci->load->view('email/checkin_notification_employee', $data, true ));
                    // $ci->email->send();

				}

  			echo  json_encode(['success'=> 'Appointment successfully booked']);

  			}

  			else{
  				echo  json_encode(['error' => 'booking was not successfully']);
  			}
  		}

?>