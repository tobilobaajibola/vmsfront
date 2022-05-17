<?php
/**
 * 
 */
class Host extends CI_Model
{
	function get_app_user($host_key){
			$this->db->select('employee.*, employee.id as host_id');
			$this->db->join('employee', 'employee.id = app_user.host_id', 'left');
		   $get_app_host = $this->db->get_where('app_user', array('host_key' => $host_key));
		   return $get_app_host->row_array();
	}
	
	function list_host_appointment($host_id){
		$date = date('Y-m-d');
	return $this->db->query("select * from appointment a where (a.employee_id = $host_id  and (a.end_date >= '$date' or a.status = 0))")->result_array();
	}

	function host_appointment_details($host_id, $appointment_id){
	return $this->db->query("select * from appointment a where (a.employee_id = $host_id  and id = $appointment_id)")->row_array();
	}

	function host_appointment_delete($host_id, $appointment_id){
	return $this->db->delete('appointment', array('id' => $appointment_id, 'employee_id' =>$host_id ));
	}

}
?>