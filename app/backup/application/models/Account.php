<?php
/**
 * 
 */
class Account extends CI_Model
{
	
	
// login for company to access the visitor's management portal
	function login_user($email){

	$get_login_data = $this->db->get_where('admin',  array('email' =>$email));
			return $get_login_data->row_array();
	}

	function check_user_email($submitted_email){
			$query_check_email = $this->db->get_where('admin', array('email' =>$submitted_email ));
			return $query_check_email->row_array();
			
	}

	function validate_company_qrcode($company_qrcode){
	$get_company_data = $this->db->get_where('company',  array('qrcode' =>$company_qrcode));
			return $get_company_data->row_array();
	}

	function update_admin_password($user_email, $password_details){
		$this->db->where('email', $user_email);
		$this->db->update('admin', $password_details);
	}


// login for company to access the visitor's portal
	function login_company($company_code){
// company_code is the same as desk code
	$get_login_data = $this->db->get_where('company',  array('company_code' =>$company_code));
			return $get_login_data->row_array();
	}

	function check_company_code($submitted_company_code){
			$query_check_company_code= $this->db->get_where('company', array('company_code' =>$submitted_company_code ));
			return $query_check_company_code->row_array();

	}


//update company information
	function update_company($company_data){
		$this->db->where(array('company_code' => $company_data['company_code']));
		$this->db->update('company',  $company_data);
	}
}
?>