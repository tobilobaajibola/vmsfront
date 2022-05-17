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
	 if(isset($_SESSION['company_account'])){
		$company_code= $_SESSION['company_account']['company_code'];
		$data['user_data'] = $this->Account->login_company($company_code);
		// echo $data['user_data']['company_code'];
				// print_r($_SESSION);
			redirect(base_url(), 'refresh'); 
		}
		else{
			if (isset($_REQUEST['login'])){						
	 	$this->form_validation->set_rules('company_code', 'company_code', 'required');
		$this->form_validation->set_rules('token', 'token', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['response_msg']=validation_errors();
					echo "strings";

		}

		else{
	
			// check if company_code submitted exists
			$submitted_company_code=$this->input->post('company_code');

				# code...
			
			$data['verify_company_code']=$this->Account->check_company_code($submitted_company_code);
			
			if ($data['verify_company_code']==TRUE) {

				// verify with qr code login
				if (isset($_POST['qrcode'])){
					$token = 1;
					// hook the login channel
					$loginchannel = 'qrcode';
				}
			// verify with form login
				else{
					$hashed_company_code_token=$data['verify_company_code']['token'];
					$token=password_verify($this->input->post('token'), $hashed_company_code_token);
					// hook the login channel
					$loginchannel ='frontdesk';
					}
			
			
 			if ($token >= 1){
 				$login_data =  array('desk_id' =>$data['verify_company_code']['id'], 
 									'company_id' =>$data['verify_company_code']['company_id'], 'location_id' => $data['verify_company_code']['location_id'],
 									'id' =>$data['verify_company_code']['company_email'],'company'=>$data['verify_company_code']['company_name'], 'company_code' => $data['verify_company_code']['company_code'],'loginchannel' =>  $loginchannel, 'company_logo' => $data['verify_company_code']['company_logo'], 'company_background_image' => $data['verify_company_code']['background_image'], 'company_checkout_image' => $data['verify_company_code']['check_out_image'], 'desk_name'=>$data['verify_company_code']['desk_name'], 'visitor_tag_ind' => $data['verify_company_code']['visitor_tag_ind'] );
 				// hook the session to login data
				$_SESSION['company_account'] = $login_data;
				
				// return true;
				// get user login info
				$company_code=$data['verify_company_code']['company_code'];
				$data['user_data'] = $this->Account->login_company($company_code);
				// send response message
				$data['response_msg'] = '<div class="alert alert-mini alert-success mb-30">												<strong>Successfully logged in!</strong>
										 </div>';
				redirect(base_url().'app', 'refresh');
				
			}
			else{
				// unset($_SESSION['access_company_account']);
				// return false;
				$data['response_msg'] = '<div class="alert alert-mini alert-danger mb-30"><strong>Company_code or token Incorrect </strong> </div>';
			}
			
}
       else{
				$data['response_msg'] ='<div class="alert alert-mini alert-danger mb-30"><strong>Company code or token   Incorrect </strong></div>';
       }
   }
}

  
     $this->load->view('app/app_page/login', $data);
	
     }
   
}

	function logout(){
		if(isset($_SESSION['company_account'])){
			unset($_SESSION['company_account']);
			// header("admin");
			echo "logged out";
			redirect(base_url().'login', 'refresh'); 
		}
	}

function qrcode_login($company_qrcode=''){
$data = array('');

$data['company_data'] = $this->Account->validate_company_qrcode($company_qrcode);
	if (empty($data['company_data'])) {
		// echo "string";
			 	
			 // $data['response_msg'] = 'Payment success';
			 // echo  json_encode(['success_payment'=>'Successful', 'transaction_id' =>$transaction_id]);
				// load qrscanner page if timed out
			$this->load->view('pages/qrscan', $data);
			 }
			 else{
	        ?>
	        <!-- redirect to login screen after validation -->
	         <form id="qrlogin_redirect" method="POST" action="<?php echo base_url()?>login">
						<input required type="hidden" value="<?php echo $data['company_data']['company_code'];?>" name="company_code" >
						<input type="hidden" value=""  name="login">
						<input type="hidden" value="qrcode"  name="token">
			           <input type="hidden" name="qrcode" value="<?php echo $data['company_data']['qrcode'];?>"/>
			 </form>';
			             
	        <script type="text/javascript">
	             document.getElementById('qrlogin_redirect').submit(); // SUBMIT FORM
	        </script>

			<?php
		}
	}



function account_setting(){

	 if(isset($_SESSION['access_company_account'])){
	$data['page_layout']='account/account_settings';
		$this->load->view('page_layout', $data);
	}
	else{
			redirect(base_url().'login', 'refresh'); 
	}
}


function view_profile(){
	 if(isset($_SESSION['access_company_account'])){
	 
	$user_id=$_SESSION['access_company_account']['tour_agency_id'];
	$data['user_profile'] = $this->Account->user_profile($user_id);
	$data['page_layout']='pages/account/profile';
		$this->load->view('page_layout', $data);
	}
	else{
			redirect(base_url().'login', 'refresh'); 
	}
}

function edit_profile(){
	$user_id=$_SESSION['access_company_account']['tour_agency_id'];
	 		$this->form_validation->set_rules('tour_agency_name', 'Tour agency Id', 'required');
		if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();	
            echo json_encode(['error'=>$data['error']]);
		}
		else{
			unset($_REQUEST['/accounts/edit_profile']);
 		$this->Account->edit_user_profile($_REQUEST, $user_id);

			$data['response_msg'] = 'token reset was successfully. Kindly check your mail';
       		echo json_encode(['success'=>$data['response_msg']]);

 	}
}

}
?>