<?php
/**
 * 
 */
class Boxes extends CI_Controller
{
	
	function box_load($box_load='')
	{
		$data = array('');
		$this->load->view('pages/admin/boxes/'.$box_load, $data);
	}

	function box_add_employee(){
		$data = array('');
		$this->load->view('pages/admin/boxes/add_employee', $data);
	}


	function box_edit_employee($employee_id){
		$data = array('');
		$data['employee_detail'] = $this->Employee->get_employee_detail($employee_id, $_SESSION['admin_account']['company_id']);
		$this->load->view('pages/admin/boxes/edit_employee', $data);
	}

		function box_add_appointment(){
		$data = array('');
		// list employee 
        $data['list_employee']= $this->Employee->list_employee( $_SESSION['admin_account']['company_id']);
		$this->load->view('pages/admin/boxes/add_appointment', $data);
	}

	function box_add_visitor_tags(){
		$data = array('');
		$this->load->view('pages/admin/boxes/add_visitor_tag', $data);
	}

	 function box_delete_visitor_tag($tag_no){
		$data = array('');
		$visitor_tag_data = array('tag_no'=>$tag_no, $_SESSION['admin_account']['company_id']);
		delete_visitor_tag($visitor_tag_data);
        }



 function  box_list_employees()
	{
		 if(isset($_SESSION['admin_account'])){
        $data= array(''); 
       
		$data['list_employee']= $this->Employee->list_employee($_SESSION['admin_account']['company_id']);
		   
        foreach ($data['list_employee'] as $list_employees){
        	echo  json_encode($list_employees['firstname']);
        }
	}
}


	function box_list_checkin($status='')
	{
		if(isset($_SESSION['admin_account'])){
		$data = array('');

    function timeago($date) {
       $timestamp = strtotime($date);   
       
       $strTime = array("second", "minute", "hour", "day", "month", "year");
       $length = array("60","60","24","30","12","10");

       $currentTime = time();
       if($currentTime >= $timestamp) {
            $diff     = time()- $timestamp;
            for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . " " . $strTime[$i] . "(s) ago ";
       }
    }
        $data['list_checkin'] = $this->Visitor->get_list_of_checkin($_SESSION['admin_account']['company_id'], 10);
        $this->load->view('pages/admin/boxes/recent_checkin', $data);
	}

else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
    }

    function box_vistor_checkin_detail($checkin_id){
    	$data['checkin_data'] = $this->Visitor->view_visitor_tag($checkin_id, $_SESSION['admin_account']['company_id']);
        $this->load->view('pages/admin/boxes/checkin_detail', $data);
    }

 function smstest(){
            sms_send('Test message', '+2348064012829');
        }



}
?>