<?php
/**
 * 
 */
class Employees extends CI_Controller
{
	
	function list_employees()
	{
		
		if(isset($_SESSION['admin_account'])){
        $data= array(''); 
       
		$data['list_employee']= $this->Employee->list_employee($_SESSION['admin_account']['company_id'], $_SESSION['admin_account']['location_id']);
		 $data['page_layout']='pages/admin/employee';    
        $this->load->view('admin_page_layout', $data);
	}
        else{
                redirect(base_url().'admin/login', 'refresh'); 
        }
	}



	function add_employees()
	{	
		// $add_employee = $_REQUEST['add_employee'];
		 // foreach ($add_employee as $k=>$v) {
		// check for space
		//validate if the employee exists
			$table_data = array('company_id'=>$_SESSION['admin_account']['company_id'], 'email' => $this->input->post('email'));
			$data['if_value_exists_data'] = $this->Usecase->if_value_exists('employee', $table_data);
			if(!empty($data['if_value_exists_data']))
			{
            echo json_encode(['error'=>'email already exists']);
			}
			else{
	      			$employee_data  = array(
	      				'company_id' => $_SESSION['admin_account']['company_id'],
							'firstname' => $this->input->post('firstname'),
							'lastname' => $this->input->post('lastname'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone'),
							'department'=> $this->input->post('department'),
							'location_id' => $this->input->post('location_id'),
							'status' => 'ACTIVE'
						);
	      			$this->Employee->add_employee($employee_data);

	      			 if ($this->db->affected_rows() > 0) {
	      			echo  json_encode(['success'=>'Host Successfully Added']);
	  				}
	  			else{
	  				
	  				// We could not update your password, please try again
					// echo  json_encode(['error'=>$this->db->error()]);
					echo  json_encode(['error'=> $user_email]);
	  				}
	}

	}


function bulk_upload_hosts(){

        $data= array(''); 

if (isset($_POST["Import"])) {

     print_r($_FILES["fileToUpload"]);

    // first check host has been registered by this company
	$data['employee_data']= $this->Employee->list_employee($_SESSION['admin_account']['company_id']);
	if(!empty($data['employee_data'])){

										

    $fileName = $_FILES["file"]["tmp_name"];

    

    if ($_FILES["file"]["size"] > 0) {

        

        $file = fopen($fileName, "r");

 		

 		

										

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

       


				$employee_data  = array(
	      					'company_id' => $_SESSION['admin_account']['company_id'],
							'firstname' => $column[0],
							'lastname' => $column[1],
							'email' => $column[2],
							'phone' => $column[3],
							'status' => 'ACTIVE'
						);
	      			$this->Employee->add_employee($employee_data);

	 if ($this->db->affected_rows() > 0) {
	      			echo  json_encode(['success'=>'CSV Data Imported into the Database']);
	  				}
	  			else{
	  				
	  				// We could not update your password, please try again
					// echo  json_encode(['error'=>$this->db->error()]);
					echo  json_encode(['error'=> 'Problem in Importing CSV Data']);
	  				}


        }

    }

}




else{
	 echo json_encode(['error'=>'bulk upload can only be used when you have not added any host']);
}
}
}




	function edit_employees()
	{	
		$employee_id = $_POST['employee_id'];
		 // foreach ($add_employee as $k=>$v) {
		// check for space
		//validate if the employee exists

		// $validation->setRules([
  //       'username' => 'required|is_unique[users.username]',
  //       'password' => 'required|min_length[10]'
  //   	],
		//     [   // Errors
		//         'username' => [
		//             'required' => 'All accounts must have usernames provided',
		//         ],
		//         'password' => [
		//             'min_length' => 'Your password is too short. You want to get hacked?'
		//         ]
		//     ]
		// );
		 $this->form_validation->set_rules('firstname', 'First Name', 'required');
	 		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
	 		$this->form_validation->set_rules('email', 'Email', 'required');
	 		$this->form_validation->set_rules('phone', 'Phone number', 'required');
	 		if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();	
            echo json_encode(['error'=>$data['error']]);
		}
		else{
			// validate if email already exists
			$table_data = array('company_id'=>$_SESSION['admin_account']['company_id'], 'email' => $this->input->post('email'));
			$table = 'employee';
			$data['if_value_exists_data'] = $this->Usecase->if_value_exists($table, $table_data);
			if(!empty($data['if_value_exists_data']) && ($data['if_value_exists_data']['id'] != $this->input->post('employee_id')) )
			{
            echo json_encode(['error'=>'email already exists']);
			}
			else{

				$admin_company_id = $_SESSION['admin_account']['company_id'];
	      			$employee_data  = array(
	      					'firstname' => $this->input->post('firstname'),
							'lastname' => $this->input->post('lastname'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone'),
							'employee_ext' => $this->input->post('extention'),
							'status' => $this->input->post('status')
						);
	      			$this->Employee->edit_employee($employee_data, $employee_id, $admin_company_id);

	      			 if ($this->db->affected_rows() > 0) {
	      			echo  json_encode(['success'=>'Host succesfully updated']);
	  				}
	  			else{
	  				
	  					// echo  json_encode(['error'=>$this->db->error()]);
					echo  json_encode(['error'=> 'Nothing was updated']);
	  				}
	  			}
	  		}
	// }

	}


	function admin_search_employees(){


     $searchdata = $_GET["employee"];
     $company_id = $_SESSION['admin_account']['company_id'];
	$data['list_employee_data'] = $this->Employee->search_employee($searchdata, $company_id);
	if (!empty($data['list_employee_data'])){ 
	foreach ($data['list_employee_data'] as $list_employee) {
			echo "<p>".$list_employee["firstname"] .' '.$list_employee["lastname"]."</p>";
	}
}
else
{
	echo "<p><code>Employee Not found</code></p>";
}
}

}
?>