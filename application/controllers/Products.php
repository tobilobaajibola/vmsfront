<?php
/**
 * 
 */
class Products extends CI_Controller
{
// 	Purchase product
// list product
// product detail
// list product history 
	function list_products($product_category='')
	{
		 $data= array(''); 
        // $data['title'] = ucfirst($page); // Capitalize the first letter 
		 
		 // if its a  category list
		 $data['product_category'] = $product_category;
		 // get category data
		 $data['product_category_details']= $this->Product->get_product_category($product_category);
		 $product_category_id = $data['product_category_details']['category_id'];
		 $data['list_product_category']= $this->Product->list_product_category($product_category_id);

		 if(empty($product_category)){
		$data['list_product']= $this->Product->list_product();
	}
	else{
		$data['list_product']= $this->Product->get_products($product_category, 100);
	// foreach ($data['list_product'] as $list_productss) {
	// 	$data['list_feature'] = $this->Product->list_product_feature($list_productss['product_ids'], $list_productss['category_id']);	
	// 	}
	}

         $data['page_layout']='pages/product';    
         $this->load->view('page_layout', $data);
	}

	function product_categories(){
		$data= array();
		$data['page_layout']='pages/product_category';    
         $this->load->view('page_layout', $data);
	}

	function product_details($product_slug){
		$data= array('');   
		// trim the product slug url of the ?ajax=true
		$product_slug = rtrim($product_slug, "-?"); 
		$product_slug = rtrim($product_slug, "?"); 
		 $data['product_detail']= $this->Product->product_detail($product_slug);
		 $data['product_feature'] = $this->Product->list_product_category_features( $data['product_detail']['product_id']);
         $this->load->view('box/product_detail', $data);
	}

	function purchase_products(){
		  // echo  json_encode(['total_amount'=> 200.'00', 'total_amount_paystack'=> 200, 'email'  => 'test@mail.com', 'transaction_id' => 2000]);
	    checkout_product_helper($_REQUEST, $_SESSION);
	}
}


