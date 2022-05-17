<?php
class Appointments extends CI_Controller{

	function verify_host($employee_id){
		// first verify the company account
		// then verify if host account is still active

	}
	function create_appointments(){
		$this->form_validation->set_rules('first_name', 'Name', 'required');
			 // echo  json_encode(['success'=> 'Appointment successfully booked']);
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
		}
		else{
			
        	// Header('Content-Type : application/json'); //method allowed
			$api_key_value = $this->input->get_request_header("X-API-KEY");
			$host_key_value = $this->input->get_request_header("HOST-KEY");
        	// validate user key;
			$data['host_detail'] = $this->Host->get_app_user($host_key_value);


			ob_clean();
			header_remove(); 
			header('content-type: application/json');
 			if(!empty($data['host_detail'])){
 			// verify_app_owner();
			// get the employee id from the submitted employee name
			$company_id = $data['host_detail']['company_id'];
			$host_id  = $data['host_detail']['host_id'];
			$location_id = $data['host_detail']['location_id'];
			
			submit_appointment_helper($host_id, $company_id, $location_id);	

 			}
 			else{
			http_response_code(500);
			echo json_encode(['response'=>'invalid hosts key']); 

			}
 			exit();
        	// validate api key;		

  		}
	}

	function list_appointments(){
		$api_key_value = $this->input->get_request_header("X-API-KEY");
		$host_key_value = $this->input->get_request_header("HOST-KEY");
		$data['host_detail'] = $this->Host->get_app_user($host_key_value);


		 ob_clean();

		// this will clean up any previously added headers, to start clean
		header_remove(); 
		header('content-type: application/json');
		http_response_code(200);

			if(!empty($data['host_detail'])){
			// verify_app_owner();
		// get the employee id from the submitted employee name
		$company_id = $data['host_detail']['company_id'];
		$host_id  = $data['host_detail']['host_id'];
		$location_id = $data['host_detail']['location_id'];

		$data['list_appointment'] = $this->Host->list_host_appointment($host_id);
		if(!empty($data['list_appointment'])){
			foreach ($data['list_appointment'] as $list_appointment) {
				$list_appointments[] = array('host_id' =>$list_appointment['employee_id'],
											'host_firstname' =>$list_appointment['firstname'],
											'host_lastname' =>$list_appointment['lastname'],
											'host_organization' =>$list_appointment['organization'],
											'host_email' =>$list_appointment['email'],
											'host_phone' =>$list_appointment['phone'],
											'host_access_code' =>$list_appointment['appointment_code'],
											'host_expected_date'=>$list_appointment['expected_date'],
											'host_expected_time' =>$list_appointment['expected_time'],
											'host_end_date'=>$list_appointment['end_date'],
											'host_end_time' =>$list_appointment['end_time'],
											'host_purpose' => $list_appointment['purpose'],
											'host_message' =>$list_appointment['message'],
											'host_status' =>$list_appointment['status'],
											'date_created' =>$list_appointment['updtime']
											);
			}
		echo  json_encode(['response'=>$list_appointments]);

		}
		else{
		echo  json_encode(['response'=>'No appointment']);
		}	
		
		}
		else{
			http_response_code(500);
			echo json_encode(['response'=>'invalid hosts key']); 

		}
		exit();

	}

	function appointment_detail($appointment_id){
		$api_key_value = $this->input->get_request_header("X-API-KEY");
		$host_key_value = $this->input->get_request_header("HOST-KEY");
		$data['host_detail'] = $this->Host->get_app_user($host_key_value);

		$host_id  = $data['host_detail']['host_id'];

		ob_clean();
		header_remove(); 
		header('content-type: application/json');
		if(!empty($data['host_detail'])){
		http_response_code(200);
			$data['appointment_detail'] = $this->Host->host_appointment_details($host_id, $appointment_id);
		if(!empty($data['appointment_detail'])){
			echo json_encode(['response'=>$data['appointment_detail']]); 
		}
		else{
			echo json_encode(['response'=>'no data']); 
		}
		}
		else{
			http_response_code(500);
			echo json_encode(['response'=>'invalid hosts key']); 

		}
	}


	function delete_appointment($appointment_id){
		$api_key_value = $this->input->get_request_header("X-API-KEY");
		$host_key_value = $this->input->get_request_header("HOST-KEY");
		$data['host_detail'] = $this->Host->get_app_user($host_key_value);
		$host_id  = $data['host_detail']['host_id'];
			ob_clean();
		header_remove(); 
		header('content-type: application/json');
			if(!empty($data['host_detail'])){
				$data['appointment_detail'] = $this->Host->host_appointment_delete($host_id, $appointment_id);
			if ($this->db->affected_rows() > 0) {
				echo json_encode(['response'=>'Deleted row']); 
			}
			else{
				echo json_encode(['response'=>'no data deleted']); 
			}
		}
		else{
			http_response_code(500);
			echo json_encode(['response'=>'invalid hosts key']); 

		}
	}
	
	function list_host_checkin($start_date='', $end_date=''){
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$api_key_value = $this->input->get_request_header("X-API-KEY");
		$host_key_value = $this->input->get_request_header("HOST-KEY");
		$data['host_detail'] = $this->Host->get_app_user($host_key_value);
		$company_id = $data['host_detail']['company_id'];
		$host_id  = $data['host_detail']['host_id'];
		$location_id = $data['host_detail']['location_id'];
		$no_of_checkin = 10;
		ob_clean();
		header_remove(); 
		header('content-type: application/json');

		$data['list_checkin'] = $this->Visitor->get_list_of_checkin($company_id, $no_of_checkin, $location_id='', $start_date,  $end_date);
		// if(!empty($data['list_checkin'])){
		// 	foreach ($data['list_checkin'] as $list_checkin) {
		// 		$list_appointments[] = array('host_id' =>$list_checkin['checkin_id'],

		// 	}
		// }

		echo json_encode(['data'=>$data['list_checkin']]);
	}

	function host_checkin_detail($checkin_id){

		$api_key_value = $this->input->get_request_header("X-API-KEY");
		$host_key_value = $this->input->get_request_header("HOST-KEY");
		$data['host_detail'] = $this->Host->get_app_user($host_key_value);
		$host_id  = $data['host_detail']['host_id'];
		ob_clean();
		header_remove(); 
		header('content-type: application/json');
			if(!empty($data['host_detail'])){
					$data['checkin_detail'] = $this->Visitor->view_visitor_tag ($checkin_id);
					$checkin_detail = 
						array(
							'guest_name' => $data['checkin_detail']['firstname'].' '.$data['checkin_detail']['lastname'], 
							'guest_phone' => $data['checkin_detail']['phone'],
							'guest_image' => $data['checkin_detail']['profile_picture'],
							'guest_organization' => $data['checkin_detail']['organization'],
							'host_name' => $data['checkin_detail']['employee_firstname'].' '.$data['checkin_detail']['employee_lastname'],
							'visit_purpose' => $data['checkin_detail']['purpose'],
							'checkin_date' => $data['checkin_detail']['check_in_date'],
							'checkout_date' => $data['checkin_detail']['check_out_date'],
							'checkin_time' => $data['checkin_detail']['check_in_time'],
							'check_out_time' => $data['checkin_detail']['check_out_time'],
							'tag_no' => $data['checkin_detail']['visitor_tag'],
							'checkin_status' => $data['checkin_detail']['checkin_status'],
							'comment' => $data['checkin_detail']['comment'],
							'checkin_location' => $data['checkin_detail']['location_id'],
							'checkin_point' => $data['checkin_detail']['checkin_desk'],
							'checkout_point' => $data['checkin_detail']['checkout_desk'],
							'access_status' => $data['checkin_detail']['grant_access_status'],
							'access_granted_by' => $data['checkin_detail']['grant_access_by'],
							'access_granted_time' => $data['checkin_detail']['grant_access_time'],
							'visit_type' => $data['checkin_detail']['appointment_id']

						);
					echo json_encode(['response'=>$checkin_detail]);

  // "id": "163",
  //       "company_id": "2",
  //       "visitor_id": "29",
  //       "employee_id": "163",
  //       "appointment_id": "21",
  //       "purpose": "Official",
  //       "visitor_tag": "26Kw2",
  //       "check_in_date": "2021-10-20",
  //       "check_in_time": "15:09:00",
  //       "check_out_date": "0000-00-00",
  //       "check_out_time": "00:00:00",
  //       "checkin_uniq_code": "",
  //       "checkin_admit_status": "",
  //       "checkin_admit_time": "00:00:00",
  //       "checkin_ref": "2YP02Q",
  //       "comment": "",
  //       "status": "0",
  //       "grant_access_status": null,
  //       "grant_access_by": null,
  //       "grant_access_time": null,
  //       "desk_id": "2",
  //       "location_id": null,
  //       "checkin_desk": "Front Desk",
  //       "checkout_desk": null,
  //       "firstname": "Test",
  //       "lastname": "Test",
  //       "email": "tobiloba.ajibola@tajbank.com",
  //       "phone": "8064012829",
  //       "organization": "Test organization",
  //       "capture_name": "",
  //       "blacklist_status": "0",
  //       "updtime": "2021-10-07 15:29:17",
  //       "lastcheckin_date": "0000-00-00",
  //       "lastcheckin_time": "00:00:00",
  //       "lastcheckout_date": "0000-00-00",
  //       "lastcheckout_time": "00:00:00",
  //       "employee_ext": "100",
  //       "department_id": "",
  //       "department": "",
  //       "position_id": "0",
  //       "staff_num": "0",
  //       "employee_code": "",
  //       "userid": "",
  //       "profile_picture": "",
  //       "visitor_email": "ajibolatobiloba@yahoo.com",
  //       "visitor_phone": "806401289",
  //       "employee_firstname": "Tobiloba",
  //       "employee_lastname": "Ajibola",
  //       "employee_email": "tobiloba.ajibola@tajbank.com",
  //       "employee_phone": "8064012829",
  //       "checkin_status": "check in"

				}
			else{
			http_response_code(500);
			echo json_encode(['response'=>'invalid hosts key']); 

		}

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