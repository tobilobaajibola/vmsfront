<?php
/**
 * 
 */

class Appointment extends CI_Model
{
	
		function add_appointment($appointment_data=''){
		$this->db->insert('appointment', $appointment_data);
	}


	function check_for_appointment($appointment_code, $company_id){
		   // $query_verify_vistor_pre_visit = $this->db->query("select * from appointment  where (appointment_code = '$appointment_code')");
		$query_verify_vistor_pre_visit = $this->db->get_where('appointment', array('appointment_code' => $appointment_code, 'company_id' => $company_id));
		return $query_verify_vistor_pre_visit->row_array();
	}

	function update_appointment($appointment_updata){
		// $this->db->where('company_id', $checkin_data['company_id']);
		$this->db->where(array('id' => $appointment_updata['id']));
		$this->db->update('appointment',  $appointment_updata);
	}

	function check_in_appointment(){

	}


	function get_no_of_appointment($company_id, $today_date){
		// return $this->db->query("select count() as count from appointment where company_id = $company_id and expected_date >= $start_date and expected_date <= $end_date")->row_array() ;

		  

			  return $this->db->query("select count(*) 'count' FROM appointment   where  (company_id = $company_id and expected_date = '$today_date') ")->row_array();
       
	}

	function list_appointment($company_id, $start_expected_date='',$end_expected_date=''){
		$date = date('Y-m-d');
		// $query_list_appointment = $this->db->query("CALL list_appointment($company_id, NULL, NULL)");
		// mysqli_next_result( $this->db->conn_id );
  //       return $query_list_appointment->result();

		/**to select for all**/
      if(empty($start_expected_date && $end_expected_date)){

return $this->db->query("select e.firstname employee_firstname, e.lastname employee_lastname, e.email employee_email,
 e.phone employee_phone, e.employee_code, e.department, a.firstname, a.lastname, a.email, a.phone, a.organization, a.purpose,  a.expected_date, a.expected_time, a.status from employee e, appointment a
where (a.employee_id = e.id and a.company_id = $company_id  and (a.end_date >= '$date' or a.status = 0))")->result_array();
}
/**to select with date range**/
else{
return $this->db->query("select e.firstname employee_firstname, e.lastname employee_lastname, e.email employee_email,
 e.phone employee_phone, e.employee_code, e.department, a.firstname, a.lastname, a.email, a.phone, a.organization, a.purpose,  a.expected_date, a.expected_time, a.status from employee e, appointment a
where (a.employee_id = e.id and a.company_id = $company_id and a.status = 0 and expected_date >= $start_expected_date and expected_date <= $end_expected_date)")->result_array();
	}

}




}
?>