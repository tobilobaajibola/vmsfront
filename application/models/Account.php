<?php
class Account extends CI_Model
{
	
	function create_account($register_data){
		// create the company's account 
		$this->db->insert('account', $register_data);
	}

	function register_company($email_validation_data, $admin_data){
		$this->db->insert('admin', $admin_data);
		$this->db->insert('email_validate', $email_validation_data);
	}

	function login_user($email){

	$get_login_data = $this->db->get_where('admin',  array('email' =>$email));
			return $get_login_data->row_array();
	}

	function check_user_email($submitted_email){
			$query_check_email = $this->db->get_where('admin', array('email' =>$submitted_email ));
			return $query_check_email->row_array();
	}


	function account_activity($company_id, $limit){
		$query_activity = $this->db->get_where('activity', array('company_id' =>$company_id ), $limit);
			return $query_activity->result_array();
	}

	function update_user_password($user_email, $password_details){
		$this->db->where('email', $user_email);
		return $this->db->update('admin',$password_details);
	}

	function edit_user_profile($request_data, $user_id){
		$this->db->where('user_id', $user_id);
		return $this->db->update('user',$request_data);

	}

	function verify_email($validation_key){
		// $this->db->where('email', $email);
		$this->db->where('validation_key', $validation_key);
		return $this->db->update('admin', array('status'=>1));
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

}
?>


