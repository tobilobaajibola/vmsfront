<?php

class Subscription extends CI_Model
{
	function list_subcription_category(){
		$list_subcription_category = $this->db->query("select * from subscription_category where (status = 1) ");
		return $list_subcription_category->result_array();
	}

	function subscription_category_detail($category_id){
		$subscription_category_detail = $this->db->query("select * from subscription_category where (category_id = $category_id)");
		return $subscription_category_detail->row_array();
	}
	

	function create_subscription($subscription_data){
		$this->db->insert('subscription', $subscription_data);
	}

	function pay_subscription($subscription_payment_data){
		$this->db->insert('payments', $subscription_payment_data);

	}
	
}
?>