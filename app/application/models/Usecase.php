<?php
/**
 * 
 */
class Usecase extends CI_Model
{
	// available tags
	function no_of_visitor_tag($company_id)
	{
	return $this->db->where(['company_id'=>$company_id, 'status' => 0])->from("visitor_tag")->count_all_results();
		// $get_no_of_visitor_tag = $this->db->query("SELECT * from visitor_tag where company_id = '$company_id' and  status = 0 ");
		// return $get_no_of_visitor_tag->num_row();
	}


	//text dictionary (text_dico)

	function get_text_dico_entry($company_id, $tab_id){
		$get_text_dico_entry = $this->db->get_where('text_dico',  array('company_id' => $company_id, 'tab_id' =>$tab_id ));
		return $get_text_dico_entry->result_array();
	}


	function if_value_exists($table, $table_data){
		$if_value_exists = $this->db->get_where($table, $table_data);
		return $if_value_exists->row_array();

	}

	// vistor tag
	


	function company_ad($company_id){
		return $this->db->get_where('company_ads', array('company_id' => $company_id ,'ads_status'=> 0 ))->row_array();
	}
}

?>