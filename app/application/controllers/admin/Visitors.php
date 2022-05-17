<?php
/**
 * 
 */
class Visitors extends CI_Controller
{
	
	function view_visitor()
	{
		 if(isset($_SESSION['admin_account'])){
        $data= array(''); 
       
        $data['list_visitor'] = $this->Visitor->get_list_of_visitor($_SESSION['admin_account']['company_id']);
        $data['page_layout']='pages/admin/visitor';    
        $this->load->view('admin_page_layout', $data);
        }
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
	}



        function view_visitors_tags(){
        if(isset($_SESSION['admin_account'])){
        $data= array(''); 
       
        $data['list_visitor_tag'] = $this->Visitor->get_all_visitor_tag($_SESSION['admin_account']['company_id']);
        $data['account_detail']= $this->Account->check_company_code($_SESSION['admin_account']['admin_id']);
        $data['page_layout']='pages/admin/visitor_tags';    
        $this->load->view('admin_page_layout', $data);
        }
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }

        
        }


        function add_visitor_tags(){

              
        // check if visitor tag number exist already
        $table_data = array('company_id'=>$_SESSION['admin_account']['company_id'], 'tag_no' => $this->input->post('tag_no'));
        $data['if_value_exists_data'] = $this->Usecase->if_value_exists('visitor_tag', $table_data);
        if(!empty($data['if_value_exists_data']))
        {
            echo json_encode(['error'=>'Tag no already exists']);
        }
        else{
          $visitor_tag_data  = array('tag_no' => $this->input->post('tag_no'),
                                      'desk_id_out' => $this->input->post('desk_id'),
                                      'company_id'=>$_SESSION['admin_account']['company_id']);
        $this->Visitor->add_visitor_tag($visitor_tag_data);
         if ($this->db->affected_rows() > 0) {
        echo  json_encode(['success'=>'Visitor Tag Successfully Added']);
                }
        else{
                
                // echo  json_encode(['error'=>$this->db->error()]);
                echo  json_encode(['error'=> $user_email]);
                }

        }
        }


         function box_delete_visitor_tag($tag_id){
                $data = array('');
                $visitor_tag_data = array('id'=>$tag_id, 'company_id'=>$_SESSION['admin_account']['company_id']);
               $this->Visitor->delete_visitor_tag($visitor_tag_data);
                if ($this->db->affected_rows() > 0) {
        echo  json_encode(['success'=>'Visitor Tag Successfully deleted']);
                }
        else{
                
                // echo  json_encode(['error'=>$this->db->error()]);
                echo  json_encode(['error'=>'Unable to delete tag']);
                }

        }
        


        function edit_tag(){}

       

 

        function grant_visitor_access(){
               
                if(isset($_POST['grant_visitor'])){
                $checkin_id = $_POST['checkin_id'];
                $grant_access_by = $_SESSION['admin_account']['admin_id'];
                $company_id = $_SESSION['admin_account']['company_id'];
                $grant_visitor_data = array('grant_access_status' => 1, 'grant_access_by'=>$grant_access_by, 'grant_access_time' => date('h:i:s'));

                $this->Visitor->grant_access_to_visitor($grant_visitor_data, $checkin_id, $company_id);
                if ($this->db->affected_rows() == '1') {

                echo  json_encode(['response_code' => 00, 'success' => 'Access Granted']);
                        
                        } else {
                echo  json_encode(['response_code' => 11, 'error' => 'Something went wrong please try again']);
                        }
                }

        }
	
}
?>