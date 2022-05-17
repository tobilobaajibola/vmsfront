<?php
/**
 * 
 */
class Adminpages extends CI_Controller
{
	
	
		 public function view_admin_index($page = NULL)
        {
        if(isset($_SESSION['admin_account'])){
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
        $date_in = date("Y-m-d");
        $company_id = $_SESSION['admin_account']['company_id'];
        $data['checkin'] = $this->Visitor->get_no_of_checked_in_visitors($company_id, $date_in);
        $data['visits'] = $this->Visitor->get_no_of_visits($company_id, $date_in, $date_in);
        $data['appointments'] = $this->Appointment->get_no_of_appointment($company_id, $date_in);
        $data['no_of_tag'] = $this->Usecase->no_of_visitor_tag($company_id);
        // $data['list_checkin'] = $this->Visitor->get_list_of_checkin($_SESSION['admin_account']['company_id'], 10);
        
    
    
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
    

        $data['page_layout']='pages/admin/index';    
        $this->load->view('admin_page_layout', $data);

        }
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }

        }

        public function view($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/admin/'.$page;    
         $this->load->view('admin_page_layout', $data);
        }

        public function checkin(){
        if(isset($_SESSION['admin_account'])){
                $company_id = $_SESSION['admin_account']['company_id'];
                $data['list_checkin'] = $this->Visitor->get_list_of_checkin($_SESSION['admin_account']['company_id'], 10000);
                 $data['page_layout']='pages/admin/checkin';    
                $this->load->view('admin_page_layout', $data);
        }
          else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
        }

        
          public function appointment(){
        if(isset($_SESSION['admin_account'])){
                $company_id = $_SESSION['admin_account']['company_id'];
                $data['list_appointment'] = $this->Appointment->list_appointment($company_id);
                
                $data['page_layout']='pages/admin/appointment';    
                $this->load->view('admin_page_layout', $data);
                  }
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
        }

         public function visitor(){
       
        if(isset($_SESSION['admin_account'])){
                $company_id = $_SESSION['admin_account']['company_id'];
                $data['list_appointment'] = $this->Appointment->list_appointment($company_id);
                $data['page_layout']='pages/admin/appointment';    
                $this->load->view('admin_page_layout', $data);
                  }
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
        }

       
// admin login
// list employee
// list checkin
// list visitors
// list appointments
// 	delete appointments
// 	schedule appointment

	
}
