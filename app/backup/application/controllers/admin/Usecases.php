<?php
/**
 * 
 */
class Usecases extends CI_Controller
{
	
	function (argument)
	{	
		// visitors cuurently checked in
		$date = date ("Y-m-d");
		$company_id = 1;
		$data['checkin'] = $this->Visitor->get_checked_in_visitors($company_id, $date);

		//available visitor tags


		//total visits today


		//total appointment today


	}
}
?>
