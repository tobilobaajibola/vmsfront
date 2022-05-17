<?php
/**
 * 
 */
class Boxes extends CI_Controller
{
	
	public function settings()
	{
		$data = array();
        $this->load->view('box/settings', $data);
	}

	function list_products($product_category = ''){
		$data = array();
		if(empty($product_category)){
		$data['list_product']= $this->Product->list_product();
	}
	else{
		
		$data['product_category_details']= $this->Product->get_product_category($product_category);
	   
		$data['list_product']= $this->Product->get_products($product_category, 100);
	foreach ($data['list_product'] as $list_productss) {
		$data['list_feature'] = $this->Product->list_product_feature($list_productss['product_ids'], $list_productss['category_id']);	
		}

}
		$this->load->view('box/list_product', $data);
	}

	


	function list_product_histories(){
		$data = array();
		$user_id = '1';
		$data['product_history']= $this->Product->list_product_history($user_id);
		$this->load->view('box/list_product_history', $data);
	}

	function list_transaction_histories(){
		$data = array();
		$user_id = 1;
        $data['transaction_history']= $this->Transaction->transaction_history($user_id);
		$this->load->view('box/list_transaction_history', $data);
	}

	function list_blog_posts(){
		$data = array();
		$user_id = 1;
        $data['transaction_history']= $this->Blog->list_blog_post($user_id);
		$this->load->view('box/list_transaction_history', $data);
	}

	function checkoutdata(){
		$data = array();
		$this->load->view('cart/checkoutdata', $data);
	}


	function list_product_category_features($product_id, $category_id){
		$data = array();
		$data['list_feature'] = $this->Product->list_product_feature($product_id, $category_id);	
		$this->load->view('box/list_product_category_features', $data);
	}

	function list_hospitals(){
		$data = array();
		$data['list_hospital'] =  $this->Box->list_hospital();
		$this->load->view('box/list_hospital', $data);
	}

}
?>