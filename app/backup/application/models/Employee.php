<?php
/**
 * 
 */
class Employee extends CI_Model
{
	
	function view_employee ()
	{
		
	}

	function list_employee($company_id){
		   $get_list_employee = $this->db->get_where('employee', array('company_id' => $company_id ));

			return $get_list_employee->result_array();
	}

	function get_employee_detail($employee_id, $user_company_id){
		   $get_employee_detail = $this->db->get_where('employee', array('id'=>$employee_id, 'company_id' => $user_company_id ));
			return $get_employee_detail->row_array();
	}

		function search_employee($searchdata, $company_id){
		   
			$get_list_employee = $this->db->query("SELECT * from employee where company_id = $company_id and  (firstname like '%$searchdata%' OR lastname like '%$searchdata%')  order by firstname, lastname ");
			
			return $get_list_employee->result_array();
	}

		function get_employee_by_name($firstname, $lastname, $company_id){
			$get_employee_by_name = $this->db->query("SELECT * from employee where firstname = '$firstname' and  lastname = '$lastname' and company_id = '$company_id' ");
			return $get_employee_by_name->row_array();
	}


	function add_employee ($employee_data = '')
	{
		$this->db->insert('employee', $employee_data);
	}

	function edit_employee($employee_data, $employee_id, $user_company_id)
	{
		$this->db->where(array('id' => $employee_id));
		// ensure the company_id of the emplpyee is the same with admin_company_id this is an extra security incase the employee_id  is hard coded
		$this->db->where(array('company_id' => $user_company_id));
		$this->db->update('employee',  $employee_data);
	}

	function delete_employee()
	{

	}
}
?>