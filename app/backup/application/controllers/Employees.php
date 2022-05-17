<?php
/**
 * 
 */
class Employees extends CI_Controller
{
	function view_employees()
	{
		$data= array(''); 
        $data['title'] = ucfirst($page);   
        $data['page_layout']='pages/index';    
        $this->load->view('page_layout', $data);
	}

	

	function  list_employees(){
			// if(isset($_REQUEST['search']) && !empty($_REQUEST['search'])) {
	
		/**
			PARAMS
			$LIMIT 		= limit your query [1 - 1000]
			$KEYWORD 	= Letters/Keywords typed by the user
			
			USE THESE PARAMS TO CREATE THE QUERY.
			Quick Mysql Query Example:
			
			mysql_query("SELECT * FROM my_table WHERE title LIKE '%$KEYWORK%' LIMIT $LIMIT");
			
			Add All results to an array and encode the array with JSON. Please, see below!
		**/
		$LIMIT 		= isset($_REQUEST['limit']) 	? (int) 	$_REQUEST['limit'] 		: 2;
		$KEYWORD 	= isset($_REQUEST['search']) 	? (string) 	$_REQUEST['search'] 	: null;


		$data['list_employee_data'] = $this->Employee->list_employee();
		$array =  json_encode($data['list_employee_data']);
		// echo $array;
		// $firstname = $data['list_employee_data']['firstname'];
			// Convert to JSON
		$i=0;
		// foreach ($data['list_employee_data'] as $list_employees) {

  //       // $profile[$i]    =  $list_employees['firstname'];
  //       $list_employees[$i]    =   $list_employees['firstname'];
  //        $i++;
  //        print_r($list_employees);
    

	// }


		// $array = array(
		// 	"Aniekan Ukoh","Kehinde Fowowe","Tobiloba Ajibola","Emmanuel ofeimu","Ezeoma Emeka","Ndu Evidence","Andrew Ogbenjuwa"
		// );

		// Convert to JSON
		$json = json_encode($array);

		// Print JSON
		die($json);
}


	function edit_employees()
	{

	}

	function delete_employees()
	{

	}


	function search_employees(){
     $searchdata = $_GET["employee"];
     $company_id = $_SESSION['company_account']['company_id'];
		
	  $data['list_employee_data'] = $this->Employee->search_employee($searchdata, $company_id);
		if (!empty($data['list_employee_data'])){ 
		foreach ($data['list_employee_data'] as $list_employee) {
				echo "<p>".$list_employee["firstname"] .' '. $list_employee["lastname"].' ('.$list_employee["department"].')'."</p>";
		}
		}
		else
		{
			echo "<p><code>Employee Not found</code></p>";
		}
	 // Close statement
	    // $stmt->close();
	// }
		}

}



?>