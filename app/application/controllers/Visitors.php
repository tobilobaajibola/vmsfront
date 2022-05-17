<?php
/**
 * 
 */
class Visitors extends CI_Controller
{
	
	function add_visitors()
	{	

					// Validate if visitor have been here before
					// Add viisitor details to visitor table if he/she is new
					// Check in visitor
		
	      			$visitor_data  = array(
	      					'company_id' => 1,
							'firstname' => $this->input->post('first_name'),
							'lastname' => $this->input->post('last_name'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone_number'),
							'organization' => $this->input->post('organization'),
						);
	      			$this->Visitor->add_visitor($visitor_data);
	      			
	      			if ($this->db->affected_rows() > 0) {
	      				 echo  json_encode(['data'=> $visitor_data, 'response_code' => 00, 'response' => 'success']);
	      			}

	      			else{
	      				echo  json_encode(['response_code' => 11, 'response' => 'failure']);
	      			}
	// }

	}

	function checkin_visitors(){
			
			
		// assign posted data to an array
			// $email =  $this->input->post('email');
			// $phone =  $this->input->post('phone_number');
			// $organization = $this->input->post('organization');
	  //     	$company_id = $this->input->post('company_id');

		// $this->form_validation->set_rules('company_id', 'Company',array('required' => 'Company code is required'));
		$this->form_validation->set_rules('first_name', 'First name', 'required');
		$this->form_validation->set_rules('last_name', 'Last name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone number', 'required');
		$this->form_validation->set_rules('organization', 'organization', 'required');
		$this->form_validation->set_rules('upload_image', 'Capture', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
	      echo  json_encode(['response_code' => 11, 'error' => $data['response_msg']]);
	      exit();
		}
		
	      	// Add visitor if visitor has not been here before of pre-registered
		
		$company_id = $this->input->post('company_id');
			$visitor_data  = array(
	      					'company_id' => $this->input->post('company_id'),
							'firstname' => $this->input->post('first_name'),
							'lastname' => $this->input->post('last_name'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone_number'),
							'organization' => $this->input->post('organization'),
							'capture_name'=> $this->input->post('upload_image')
						);

			// check if visitor has been here before
			$data['verify_datas'] = $this->Visitor->verify_vistor_pre_visit($visitor_data['email'], $visitor_data['phone'], $company_id);
			
			// get the employee id from the submitted employee name
			$employeename = $this->input->post('employeename');
			$location_id = $_SESSION['company_account']['location_id'];
			$employee_id = get_employee_id_from_full_name($employeename, $visitor_data['company_id'], $location_id);

			// if visitor exists do the following
			if(!empty($data['verify_datas'])){
			//Verify details of pregistered visitor if he/she already visited 
	      	$visitor_id = $data['verify_datas']['id'];
	      	$appointment_id = 0;
	      	$welcome_message = "Good to have you back".' '.$this->input->post('first_name');

			}

			else{

			
			// get the data of visitor to be posted to checkin table

	      	$this->Visitor->add_visitor($visitor_data);
	      	$visitor_id = $this->db->insert_id();
	      	$appointment_id = 0;
	      	$welcome_message = "Welcome to the Future Bank";
	      }

	      	$purpose = $this->input->post('purpose');


	      	
	      	
	      	// Checkin Visitor added or pre-visit or pre-registration(has an appointment) verified  by calling the checkin helper fucntions
			checkin_helper_function($visitor_data['company_id'], $visitor_id, $employee_id, $appointment_id, $welcome_message, $purpose);
		

	      		}


	function checkin_pre_visitors(){
			
			// check if visitor has been here before
			
		
			$email =  $this->input->post('email');
			$phone =  $this->input->post('phone_number');
			$organization = $this->input->post('organization');
			$purpose = $this->input->post('purpose');
			$company_id = $this->input->post('company_id');

			// verify if visitor exists
			$data['verify_datas'] = $this->Visitor->verify_vistor_pre_visit($email, $phone, $company_id);

			// split the employeename to get the employee id from db
			$employeename = $this->input->post('employeename');

			// get the employee id the visitor wants to see
			$location_id = $_SESSION['company_account']['location_id'];
			$employee_id = get_employee_id_from_full_name($employeename, $company_id, $location_id);
			// $employee_data = $data['employee_data'];
	  //     	$employee_id = $data['employee_data']['id'];

			// if visitor exists do the following
			if(!empty($data['verify_datas'])){
			//Verify details of pregistered visitor if he/she already visited 
	      	// echo "Visitor already registered";
	      	// var_dump($data['verify_datas']);
	      	$visitor_id = $data['verify_datas']['id'];
	      	$company_id = $this->input->post('company_id');
	      	$appointment_id = 0;
	      	$welcome_message = "Good to have you back";

	      
			checkin_helper_function($company_id, $data['verify_datas']['id'], $employee_id, $appointment_id, $welcome_message, $purpose);
	      	}
	      	// if visitor does not exist throw error and request registeration
	      	else {
	      			echo  json_encode(['response_code' => 11, 'error' => 'You have not been profiled <a href="'.base_url().'checkin">click here to get started </a>']);
	      	    }

	      		}


	     function checkout_visitors(){

	     	// get the data
	     	$visitor_tag = $this->input->post('visitor_tag');
	     	$phone_email = $this->input->post('phone_email');
	     	$company_id = $this->input->post('company_id');
	     	// verify if the  phone number or email is currently checked in
	     	$data['verify_checkout']= $this->Visitor->verify_visitor_is_checked_in($phone_email, $visitor_tag, $company_id);

	     	if($data['verify_checkout'] == TRUE){
	     	//send response from server
	     	$checkout = array('checkout_time' => date("H:i"),
							  'checkout_date' => date ("Y-m-d"),
							  'status' => 'check out',
							  'visitor_id'=> $data['verify_checkout']['visitor_id'],
							  'checkin_id' => $data['verify_checkout']['checkin_id'],
							  'visitor_tag' => $visitor_tag,
							  'company_id' => $company_id,
							  'checkout_desk' => $this->input->post('checkout_desk'),
							  'desk_id' => $this->input->post('desk_id'),
							  'comment'=>$this->input->post('comment')
							 );
	     	$this->Visitor->checkout_visitor($checkout);

	     	if ($this->db->affected_rows() > 0) {
	      				// get checkin details
			// get host details to send checkout notifcation
			$data['host_detail'] = $this->Employee->get_employee_detail($data['verify_checkout']['employee_id'], $company_id);
			// get visitor info
			$data['visitor_detail'] = $this->Visitor->get_visitor_detail($checkout['visitor_id']);
			// tola has just checked out of the premises
			$message  = $data['visitor_detail']['firstname'].' '.$data['visitor_detail']['lastname'].' has just checked out of the premises';
           	$recipients='234'.$data['host_detail']['phone'];
         	echo  json_encode(['success'=>'Successfully Checked out', 'msg' => 'Have a nice day']);
         	 sms_notification($message, $recipients);
	      		}

	      		else{
	      			echo  json_encode(['response_code' => 11, 'error' => 'failure']);
	      		}
	     	}

	     	else{
	      				echo  json_encode(['response_code' => 11, 'error' => 'Visitor Tag or Phone/Email does not exists']);

	     	}
	     }


	     // This function is for employee/admin to either admit or reject visitor affter checkin
	     function admit_visitors($checkin_ref=''){
	     	$data = array('');
	     	if(isset($_POST['admit_visitor'])){
	      

	     	$accept_reject = $this->input->post('accept_reject');
	     	$comment = $this->input->post('comment');
	     	$company_id = $this->input->post('company_id');
	     	$checkin_id = $this->input->post('checkin_id');
	     	$admit_visitor_data = array('checkin_admit_status' => $accept_reject,
	     								'comment' => $comment,
	     								'checkin_admit_time' => date('h:i:s'));

	     $this->Visitor->admit_checkedin_visitor($admit_visitor_data, $checkin_id, $company_id);

	     $data['checkin_detail'] = $this->Visitor->view_visitor_tag ($checkin_id);
		if($admit_visitor_data['checkin_admit_status']== 1){
			$message  = $data['checkin_detail']['employee_firstname'].' has accepted to your checkin request';
		}
		elseif($admit_visitor_data['checkin_admit_status']== 2){
			$message  = $data['checkin_detail']['employee_firstname'].' was notified and has requested you wait at the lobby';
		}
		elseif($admit_visitor_data['checkin_admit_status']== 3){
			$message  = $data['checkin_detail']['employee_firstname'].' has accepted to your checkin request';
		}

	     
         $recipients='234'.$data['checkin_detail']['visitor_phone'];

           sms_notification($message, $recipients);
                
	     	if ($this->db->affected_rows() == '1') {
	      		echo  json_encode(['response_code' => 00, 'success' => 'Successfully submitted']);
    				
				} else {
	      		echo  json_encode(['response_code' => 11, 'error' => 'Something went wrong please try again']);
				}
			}
			elseif (!empty($checkin_ref)) {
	     	// validate checkin reference
	     	$data['checkin_data'] = $this->Visitor->validate_checkin_visitor($checkin_ref);
	     	// get visitor_tag
	     	
			$data['visitor_tag_data'] = $this->Visitor->view_visitor_tag($data['checkin_data']['id']);
			$data['page_layout']='pages/admit';    
            $this->load->view('page_layout', $data);
	        }
	     }


	     

	     function upload(){
			// SET THE DESTINATION FOLDER
			$source = $_FILES["upimage"]["tmp_name"];
			// echo $source;
			// generate random name
			$filename = substr(number_format(time() * rand(),0,'',''),0,10).'.png';
			
			$destination = 'assets/images/captures/'.$filename;

			// MOVE UPLOADED FILE TO DESTINATION
			 move_uploaded_file($source, $destination) ? "OK" : "ERROR UPLOADING";
			// echo  move_uploaded_file($source, $destination) ;
			// ! $this->validate_upload_path()
                if (!move_uploaded_file($source, $destination))
                {
                       $response = array( 'status' => 200,
                        'filename' => $filename,
                        );
                   
                    // return response
                    echo json_encode($response);
                }
                else
                {
                     $response = array( 'status' => 100,
                        'filename' => "",
                        );
                   
                    // return response
                    echo json_encode($response);
                }
	     }


}
?>