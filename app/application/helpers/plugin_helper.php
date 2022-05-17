<?php
function get_employee_id_from_full_name($employeename, $company_id, $location_id){
		$ci = & get_instance();
	// split thhe employeename to get the employee id from db
			if( strpos( $employeename, ' ' ) !== FALSE ){
    			$employeename = explode(' ', $employeename);
    	
					$firstname = $employeename[0];
					$lastname = $employeename[1];
			}

			// get the employee id the visitor wants to see
			$data['employee_data'] = $ci->Employee->get_employee_by_name($firstname, $lastname, $company_id, $location_id);

			$employee_data = $data['employee_data'];
	      return $data['employee_data']['id'];
}



function submit_appointment_helper($host_id, $company_id, $location_id){
	$data = array();
	$ci = & get_instance();
	// get company/location and host details
	$data['host_detail'] = $ci->Employee->get_employee_detail($host_id, $company_id);
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
							'end_time' => $ci->input->post('expected_time'),
							'end_date' => $ci->input->post('expected_date'),
							'message' => $ci->input->post('message'),
							'location_id' => $location_id
						);
	      	$ci->Appointment->add_appointment($appointment_data);

			if ($ci->db->affected_rows() > 0) {
				
				// send mail to host
				// send mail to guest 
				// send sms to host
				// send sms to guest
         
				if($ci->input->post('sendinvite')=='1'){
					// send email to visitor
					$ci->email->from('visitor@vistacks.com', 'New Appointment');
          $ci->email->to($appointment_data['email']);
	        $ci->email->subject('New Appointment');
	        $ci->email->message($ci->load->view('email/appointment_notification', $data, true ));
          // $ci->email->send();
           $message  = 'Your access code to '.$data['host_detail']['location_name'].' on '.$appointment_data['expected_date'].' is '.$appointment_data['appointment_code'].' and your host is '.$data['host_detail']['firstname'];
           $appointment_phone = ltrim($appointment_data['phone'], '0');
           $recipients='234'.$appointment_phone;
           // sms_notification($message, $recipients);

				}

  			echo  json_encode(['success'=> 'Appointment successfully booked']);

  			}

  			else{
  				echo  json_encode(['error' => 'booking was not successfully']);
  			}
  		}


  		function sms_notification($message, $recipients){
  			    // For africa's talking
        // sms_send  defined in the helper
          sms_send($message, '+'.$recipients);

          // for monty mobile
          
					// $message = urlencode($message);
					// $curl = curl_init();

					// curl_setopt_array($curl, array(
					//   CURLOPT_URL => 'https://httpsmsc05.montymobile.com/HTTP/api/Client/SendMessage?username=Duhat@1&password=Duhat@10&destination='.$recipients.'&dataCoding=Unicode%20UCS2%20=%208&source=MMNGTest&text='.$message,
					//   CURLOPT_RETURNTRANSFER => true,
					//   CURLOPT_ENCODING => '',
					//   CURLOPT_MAXREDIRS => 10,
					//   CURLOPT_TIMEOUT => 0,
					//   CURLOPT_FOLLOWLOCATION => true,
					//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					//   CURLOPT_CUSTOMREQUEST => 'GET',
					//   CURLOPT_SSL_VERIFYPEER=>0,
					//   CURLOPT_SSL_VERIFYHOST => false,
					// ));

					// $response = curl_exec($curl);
				// for error// $responses = curl_error($curl);

				// curl_close($curl);

  		}

?>