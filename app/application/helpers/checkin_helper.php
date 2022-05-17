<?php
function checkin_helper_function($company_id, $visitor_id, $employee_id, $appointment_id, $welcome_message, $purpose){
		$ci = & get_instance();

			// visitor_tag
		// visitor_tag can be gotten by randomly generating tag or selecting from pre-existing tags that avaialable or define by the company in visitor_tag table

			// for auto generated visitors tag the visitor_tag_ind column in company table for each desk will be 0
			if($_SESSION['company_account']['visitor_tag_ind'] == 0){
				$visitor_tag =  $company_id.''.random_string('alnum', 3).$_SESSION['company_account']['desk_id'];
			}
			elseif($_SESSION['company_account']['visitor_tag_ind']==1){
				// if the visitor_tag_ind = 1 then use the registered visitor tag in visitor tag table
			$data['visitor_tag_data']=$ci->Visitor->get_visitor_tag($company_id, $_SESSION['company_account']['desk_id'], $purpose);
			$visitor_tag = $data['visitor_tag_data']['tag_no'];
			}


			if(!empty($visitor_tag)){
			// generate visitor tag code would be enabled on next version;
			// $visitor_tag = mt_rand();
			$checkin_ref =  $company_id.''.random_string('alnum', 5);
		      	// Checkin Visitor added or pre-visit or pre-registration(has an appointment) verified
			$checkin_data = array('company_id' => $company_id,
								  'visitor_id' => $visitor_id,
								  'employee_id' => $employee_id,
								  'appointment_id' => $appointment_id,
								  'purpose' => $purpose,
								  'check_in_time' => date("H:i:s"),
								  'check_in_date' => date ("Y-m-d"),
								  'checkin_ref' => $checkin_ref,
								  'status' => 'check in',
								  'visitor_tag' => $visitor_tag,
								  'checkin_desk' =>  $_SESSION['company_account']['desk_name'],
							  'desk_id' =>  $_SESSION['company_account']['desk_id'],
							  'location_id' => $_SESSION['company_account']['location_id']
								 );

	      	$ci->Visitor->checkin_visitor($checkin_data);
	      	$checkin_id = $ci->db->insert_id();

	      	
			// get last insert id

// echo $checkin_id;
	     
			if ($ci->db->affected_rows() > 0) {
	      			
	      	// update appointment tab;e if is an appointment
	      	if($appointment_id>0){
			$appointment_updata  = array('id'=>$appointment_id, 'status' => 1);
	      	$ci->Appointment->update_appointment($appointment_updata);
			}
			$data['visitor_tag_data'] = $ci->Visitor->view_visitor_tag($checkin_id);

	      				// get checkin details

	      				 /***start notify employee**/
						//1. send push notification							
	      		//2.  send email to notify employee
	
	          $tomail = $data['visitor_tag_data']['employee_email'];
	          $subject = 'New Visitor';
	          $message =  $ci->load->view('email/checkin_notification_employee', $data, true );
			// send_email_to($subject, $tomail, $message);

			$ci->email->from('visitor@vistacks.com', 'New Visitor');
   			$ci->email->to($data['visitor_tag_data']['employee_email']);
   			$ci->email->bcc('duhatcreativeminds@gmail.com');
            $ci->email->subject('New Checkin');
            $ci->email->message($ci->load->view('email/checkin_notification_employee', $data, true ));
                    // $ci->email->send();

	      				 //3. send sms to notify employee
                 //send sms
                 $message  = $data['visitor_tag_data']['firstname'].' is waiting at the lobby click link to admit/reject '.base_url().'admit_checkin/'.$data['visitor_tag_data']['checkin_ref'];
                 $recipients='234'.$data['visitor_tag_data']['employee_phone'];
                // sms_notification($message, $recipients);
                


						/*** Notification ends ***/
						//send response
	     echo  json_encode(['success'=>'Successfully Checked in', 'welcome_msg' =>'Successfully Checked in', 'checkin_id' => $checkin_id, 'email' => $tomail]);
	      			}

	      			else{
	      				echo  json_encode(['response_code' => 11, 'error' => 'failure']);
	      			}
	      	}
	      	// if tag is not available
	      	else{
	      		    echo  json_encode(['response_code' => 11, 'error' => 'No Tag avaialable currently, Please contact front desk and retry']);
	      	}


}
?>