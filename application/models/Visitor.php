<?php
/**
 * 
 */
class Visitor extends CI_Model
{
	
	function view_visitor_tag ($checkin_id='')
	{
		return  $this->db->query("select *, visitor.firstname as firstname, visitor.lastname as lastname, visitor.email as visitor_email, visitor.capture_name as capture_name,  employee.firstname as employee_firstname, employee.lastname as employee_lastname, employee.email as employee_email, employee.phone as employee_phone   from checkin left join visitor on (checkin.visitor_id = visitor.id) left join employee on (checkin.employee_id = employee.id) where (checkin.id = '$checkin_id')")->row_array();

	}

	function verify_visitor_is_checked_in($phone_email, $visitor_tag,  $company_id){
		return  $this->db->query("select *, visitor.id as visitor_id, checkin.id as checkin_id  from visitor left join checkin on (visitor.id = checkin.visitor_id) where (visitor.email = '$phone_email' or visitor.phone = '$phone_email' and checkin.visitor_tag = '$visitor_tag' and checkin.company_id = '$company_id' and checkin.status = 'check in')")->row_array();
	}

	function add_visitor ($visitor_data = '')
	{
		$this->db->insert('visitor', $visitor_data);

	}




	function edit_visitor()
	{

	}

	function delete_visitor()
	{

	}

	function checkin_visitor ($checkin_data = '')
	{
		//update visitor_tag table
		$this->db->where('company_id', $checkin_data['company_id']);
		$this->db->where('tag_no', $checkin_data['visitor_tag']);
		$this->db->update('visitor_tag',  array('status' => 1, 'last_checkin_visitor_id' => $checkin_data['visitor_id'],  'desk_id_in' => $checkin_data['desk_id'] ));
      
        //update appointment 

		$this->db->where('company_id', $checkin_data['company_id']);
		$this->db->where('id', $checkin_data['appointment_id']);
		$this->db->update('appointment',  array('status' => 1));


		// insert into checkin table
		return $this->db->insert('checkin', $checkin_data);

	}

	function validate_checkin_visitor($checkin_ref){
		$validate_checkin_visitor = $this->db->get_where('checkin',  array('checkin_ref' => $checkin_ref));
		return $validate_checkin_visitor->row_array();
	}

	function admit_checkedin_visitor($admit_visitor_data, $checkin_id, $company_id){
		$this->db->where('company_id', $company_id);
		$this->db->where('id', $checkin_id);
		$this->db->update('checkin',  $admit_visitor_data);

	}


	function grant_access_to_visitor($admit_visitor_data, $checkin_id, $company_id){
		$this->db->where('company_id', $company_id);
		$this->db->where('checkin_ref', $checkin_id);
		$this->db->update('checkin',  $admit_visitor_data);
	}

	function checkout_visitor($checkout){
		// first verify the data 
		
		// $this->db->where('id', $checkout['checkin_id']);
		$this->db->where('visitor_id', $checkout['visitor_id']);
		$this->db->update('checkin',  array('check_out_time' => $checkout['checkout_time'], 'check_out_date' => $checkout['checkout_date'], 'checkout_desk'=>$checkout['checkout_desk'], 'status' => $checkout['status']  ));

		// update visitor's tag and make it available 
		$this->db->where('company_id', $checkout['company_id']);
		$this->db->where('tag_no', $checkout['visitor_tag']);
	    $this->db->update('visitor_tag',  array('status' => 0, 'desk_id_out' => $checkout['desk_id']));


		$this->db->where('id', $checkout['visitor_id']);
		$this->db->update('visitor',  array('lastcheckout_time' => $checkout['checkout_time'], 'lastcheckout_date' => $checkout['checkout_date']));


		

	}

	function verify_vistor_pre_visit($email, $phone, $company_id){
		   // $query_verify_vistor_pre_visit = $this->db->query("select * from visitor  where (email = '$email' and phone = '$phone'  )");
		
		$query_verify_vistor_pre_visit = $this->db->get_where('visitor', array('email' => $email, 'phone' => $phone, 'company_id'=>$company_id));

			return $query_verify_vistor_pre_visit->row_array();
	}


	function get_visitor_tag($company_id, $desk_id){
		$get_visitor_tag = $this->db->get_where('visitor_tag',  array('company_id' => $company_id, 'status' => 0,  'desk_id_out' => $desk_id));
		return $get_visitor_tag->row_array();
	}

	function get_all_visitor_tag($company_id){
		return  $this->db->query("select *, visitor.firstname as visitor_firstname, visitor.lastname as visitor_lastname   from visitor_tag left join visitor on (visitor_tag.last_checkin_visitor_id = visitor.id)  where (visitor_tag.company_id = $company_id)")->result_array();
	}
	
	 function get_no_of_checked_in_visitors($company_id, $date_in)
    {
        // $query = $this->db->query("CALL no_of_checkins($company_id, '$date_in')");
        // mysqli_next_result( $this->db->conn_id );
       
        return $this->db->query("select count(*)count FROM checkin   where  (company_id = $company_id and check_in_date = '$date_in' and status = 'check in') ")->row_array();
	 
    }


    function get_no_of_visits($company_id, $start_date_in, $end_date_in)
    {
       
        // $query = $this->db->query("CALL no_of_visits($company_id, '$start_date_in', '$end_date_in')");
        // mysqli_next_result( $this->db->conn_id );
        // return $query->row();
        if(empty($start_date_in && $end_date_in)){
        	return $this->db->query("select count(*)'count' from checkin where( company_id = $company_id)")->row_array();
        }
        else{
        	return $this->db->query("select count(*)'count' from checkin where( company_id = $company_id and check_in_date >= $start_date_in and check_in_date <= $end_date_in )")->row_array();

        }
    //    return $this->db->query("
    //    	IF($start_date_in IS NULL AND $end_date_in IS NULL) THEN
				// select  count(*) 'count' from checkin where company_id = $company_id;
				// /**to select with date range**/
				// elseif ($start_date_in IS NOT NULL AND $end_date_in IS NOT NULL) THEN
				// select  count(*) 'count' from vms.checkin where company_id = $company_id and check_in_date >= $start_date_in and check_in_date <= $end_date_in ;
				// END IF;")->row_array();
    }

    function get_list_of_checkin($company_id, $no_of_checkin, $location_id='')
    {
    // if main admin view all checkins 
    if($location_id > 0){
				$location = 'and c.location_id = '.$location_id;
			}
	else{
		$location = '';
	}
	$query_checkin = $this->db->query("select c.id as checkin_id, firstname, lastname, email, phone, organization, purpose,  visitor_tag, check_in_date, check_in_time, check_out_date, check_out_time, capture_name, c.checkin_admit_status, 
	case
	when c.checkin_admit_status = 0 then 'Pending'
	when c.checkin_admit_status = 1 then 'Admitted'
	when c.checkin_admit_status = 2 then 'Wait'
	when c.checkin_admit_status = 3 then 'Reject' END checkin_admit_status_text,
	case
	when c.checkin_admit_status = 0 then 'info'
	when c.checkin_admit_status = 1 then 'success'
	when c.checkin_admit_status = 2 then 'warning' 
	when c.checkin_admit_status = 3 then 'danger' END checkin_admit_status_indicator, c.comment,
	status from visitor v, checkin c
	where (c.visitor_id = v.id  and v.company_id = $company_id $location)order by c.id desc LIMIT $no_of_checkin") ;
  
	return $query_checkin->result_array();

    }


    function get_list_of_visitor($company_id)
    {
       
        // $query_visitor = $this->db->query("CALL list_visitor($company_id)");
        // mysqli_next_result( $this->db->conn_id );
        // return $query_visitor->result();

       return $this->db->query("select * from visitor where company_id = $company_id ")->result_array();

    }

    function add_visitor_tag($visitor_tag_data){
		$this->db->insert('visitor_tag', $visitor_tag_data);
    }

     function delete_visitor_tag($visitor_tag_data){
		$this->db->delete('visitor_tag', $visitor_tag_data);
    }


    function get_visit_history($company_id, $host_id, $visitor_id){
    	// if main admin view all checkins 
   
	$query_checkin = $this->db->query("select c.id as checkin_id, firstname, lastname, email, phone, organization, purpose,  visitor_tag, check_in_date, check_in_time, check_out_date, check_out_time, capture_name, c.checkin_admit_status, 
	case
	when c.checkin_admit_status = 0 then 'Pending'
	when c.checkin_admit_status = 1 then 'Admitted'
	when c.checkin_admit_status = 2 then 'Wait'
	when c.checkin_admit_status = 3 then 'Reject' END checkin_admit_status_text,
	case
	when c.checkin_admit_status = 0 then 'info'
	when c.checkin_admit_status = 1 then 'success'
	when c.checkin_admit_status = 2 then 'warning' 
	when c.checkin_admit_status = 3 then 'danger' END checkin_admit_status_indicator, c.comment,
	status from visitor v, checkin c
	where (c.visitor_id = v.id  and v.company_id = $company_id and c.employee_id = $host_id and c.visitor_id = $visitor_id)order by c.id desc") ;
  
	return $query_checkin->result_array();
    }

}
?>