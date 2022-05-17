<?php
/**
* 
*/
// session_start();
class Accounts extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model(array('Account'));
		$data= array();

		// $this->load->library('cart');
// $this->session
	}

	function login()
	{
   		$data =array();
		$data['response_msg'] = '';
	 if(isset($_SESSION['admin_account'])){
		$email= $_SESSION['admin_account']['email'];
		$data['user_data'] = $this->Account->login_user($email);
		// echo $data['user_data']['email'];
				// print_r($_SESSION);
			redirect(base_url().'admin/login', 'refresh'); 
		}
		else{
			if (isset($_REQUEST['login'])){			
	 	$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']= validation_errors();
		}
		else{
	
			// check if email submitted exists
			$submitted_email=$this->input->post('email');

				# code...
			
			$data['verify_email']=$this->Account->check_user_email($submitted_email);
			if ($data['verify_email']==TRUE) {
			$hashed_email_password=$data['verify_email']['password'];
			$password=password_verify($this->input->post('password'), $hashed_email_password);
			
 			if ($password >= 1){
 					// verify if account is active
 				if($data['verify_email']['status'] == 1){
					
 				$login_data =  array('admin_id' =>$data['verify_email']['id'], 'email'=>$data['verify_email']['email'], 'company_id' =>$data['verify_email']['company_id'], 'location_id' =>$data['verify_email']['location_id'], 'firstname'=>$data['verify_email']['firstname'], 'lastname'=> $data['verify_email']['lastname'], 'level' => $data['verify_email']['level'], 'role' => $data['verify_email']['role']);
 				// hook the session to login data
				$_SESSION['admin_account'] = $login_data;
				
				// return true;
				// get user login info
				$email=$data['verify_email']['email'];
				$data['user_data'] = $this->Account->login_user($email);
				// send response message
				$data['response_msg'] = '<div class="alert alert-mini alert-success mb-30">												<strong>Successfully logged in!</strong>
										 </div>';
				redirect(base_url().'admin', 'refresh');
			}
			else{
				$data['response_msg'] =
				 '<div class="alert bg-danger text-white p-3 my-2 b-0 rounded d-inline-block w-100 max-w-600">		
				 		<strong>Account is currently not active!</strong>
				</div>';
			}
			}
			else{
				// unset($_SESSION['access_admin_account']);
				// return false;
				$data['response_msg'] = '<div class="alert bg-danger text-white p-3 my-2 b-0 rounded d-inline-block w-100 max-w-600">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span class="fi fi-close" aria-hidden="true"></span>
							</button>
							Email or Password ! <a href="#!" class="link-muted">Incorrect</a>
						</div>';
				// $data['response_msg'] = '<div class="alert alert-mini alert-danger mb-30"><strong>Email or Password Incorrect </strong> </div>';
			}
			
}
       else{
       			$data['response_msg'] = '<div class="alert bg-danger text-white p-3 my-2 b-0 rounded d-inline-block w-100 max-w-600">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span class="fi fi-close" aria-hidden="true"></span>
							</button>
							Email or Password ! <a href="#!" class="link-muted">Incorrect</a>
						</div>';
				// $data['response_msg'] = '<div class="alert alert-mini alert-danger mb-30"><strong>Email or Password   Incorrect </strong></div>';
       }
   }
}

  	$data['page_layout']= 'pages/admin/login';  
    $this->load->view('admin_loginpage_layout', $data);

     }
   
}

	function logout(){
		if(isset($_SESSION['admin_account'])){
			unset($_SESSION['admin_account']);
			// header("admin");
			echo "logged out";
			redirect(base_url().'admin/login', 'refresh'); 
		}
	}

	

function account_settings(){

	 if(isset($_SESSION['admin_account'])){
	// $data['user_profile'] = $this->Account->user_profile($user_id);
	 // get desk and location
	$data['list_location'] = $this->Account->get_location($_SESSION['admin_account']['company_id']);
	$data['list_admin'] = $this->Account->list_admin($_SESSION['admin_account']['company_id']);
	$data['page_layout']='pages/admin/account_setting';
		$this->load->view('admin_page_layout', $data);
	}
	else{
			redirect(base_url().'admin/login', 'refresh'); 
	}
}

function admin_settings(){

	 if(isset($_SESSION['admin_account'])){
	// $data['user_profile'] = $this->Account->user_profile($user_id);
	$data['page_layout']='pages/admin/admin_setting';
		$this->load->view('admin_page_layout', $data);
	}
	else{
			redirect(base_url().'admin/login', 'refresh'); 
	}
}


function view_profile(){
	 if(isset($_SESSION['access_admin_account'])){
	 
	$user_id=$_SESSION['access_admin_account']['tour_agency_id'];
	$data['user_profile'] = $this->Account->user_profile($user_id);
	$data['page_layout']='pages/account/profile';
		$this->load->view('page_layout', $data);
	}
	else{
			redirect(base_url().'login', 'refresh'); 
	}
}


function edit_profile(){
	$user_id=$_SESSION['user_account']['user_id'];
	 		$this->form_validation->set_rules('first_name', 'First Name', 'required');
	 		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	 		$this->form_validation->set_rules('email', 'Email', 'required');
	 		$this->form_validation->set_rules('phone', 'Phone number', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();	
            echo json_encode(['error'=>$data['error']]);
		}
		else{
			unset($_REQUEST['/accounts/edit_profile']);
			unset($_REQUEST['ci_session']);
 		$this->Account->edit_user_profile($_REQUEST, $user_id);

			$data['response_msg'] = 'Profile successfully updated. Kindly check your mail';
       		echo json_encode(['success'=>$data['response_msg']]);

 	}
}
function change_passwords(){
        if (isset($_SESSION['admin_account'])){
        
        if($_POST){
        $currentpassword=$_POST['currentpassword'];
        $newpassword=$_POST['newpassword'];

        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|matches[newpassword]');

        if($this->form_validation->run()==FALSE)
         {
         
		echo  json_encode(['error'=>validation_errors()]);

         }
     else{
         // check if the current password is equal to existing password
         $user_email = $_SESSION['admin_account']['email'];
        $data['verify_user_email']= $this->Account->check_user_email($user_email);
        $current_db_password = $data['verify_user_email']['password'];
        $password_verify=password_verify($currentpassword, $current_db_password);
        if ($password_verify >= 1){
            if($currentpassword == $newpassword){
					echo  json_encode(['error'=>'New password can not be the same as current password']);

            }
            else{
                // hash new passwords
                $newpassword = password_hash($newpassword, PASSWORD_BCRYPT);
                $password_details  = array('password' => $newpassword, 'reset_password' => '' , 'reset_password_status' => 0 );
                $this->Account->update_admin_password($user_email, $password_details);
                if ($this->db->affected_rows() > 0) {
	      			echo  json_encode(['success'=>'Password succesfully updated']);
	  				}
	  			else{
	  				
	  				// We could not update your password, please try again
					// echo  json_encode(['error'=>$this->db->error()]);
					echo  json_encode(['error'=> $user_email]);
	  				}
        }
    }
    else{
           
			echo  json_encode(['error'=>'Incorrect current password']);


    }

        
    }
}
   }
    else{
            // redirect(base_url().'admin/login', 'refresh');
			echo  json_encode(['error'=>'Incorrect curren']);

    }
}

// reset user password
 function forgot_passwords(){
       if (isset($_GET['user_password_reset'])){
         
            // check if email submitted exists
            $user_email=$_GET['user_password_reset'];
                # code...
            $data['verify_user_email']=$this->Account->check_user_email($user_email);
            if ($data['verify_user_email']==TRUE) {
                // update password
                $data['new_reset_password'] = random_string('alnum',10);
                $password = password_hash($data['new_reset_password'], PASSWORD_BCRYPT);
                $password_details  = array('password' => $password, 'reset_password' => $password , 'reset_password_status' => 1 );
                $this->Account->update_admin_password($user_email, $password_details);

            // define variable for email data
            $data['account_email'] = $data['verify_user_email']['email'];
            $data['account_name'] = $data['verify_user_email']['firstname'];
            // send password reset to user email
            $this->email->from('info@padimi.com.ng', 'Skorebot Password Reset');
            $this->email->to($data['account_email']);
            $this->email->subject('PASSWORD RESET');
            // $this->email->message($this->load->view('email/reset_password', $data, true ));
            // enable on live
            $this->email->send();
                // display response
              $data['response_msg'] = 'Password reset was successfully. Kindly check your mail';
           		echo json_encode(['success'=>$data['response_msg']]);
           		
            }

            else{
                $data['response_msg'] = 'User email does not exist';
           		echo json_encode(['error'=>$data['response_msg']]);


            }
        }
    
    else{
        // $data['page_layout'] ='pages/forgot_password';
        //  $this->load->view('page_layout', $data);   
    }

   }

}
?>