<?php
/**
 * 
 */
class Orders extends CI_Controller
{
	
	function order_results()
	{
		verify_session_helper();
		$data = array();
		$transaction_id = $_POST['transaction_id'];
		// $transaction_id = 'tour3v4lG1';
		$data['order_transaction_details'] = $this->Order->get_transaction_order_details($transaction_id, $_SESSION['user_account']['user_id']);
		$data['list_product_order'] = $this->Order->list_product_order($data['order_transaction_details']['order_ref']);
		$data['transaction_id'] = $transaction_id; 
	 	// show ticket details and serves as invoice
	 	 $this->cart->destroy();
	 	 // $data['page_layout']='email/invoice';
		 $data['page_layout']='cart/checkout_response';
		$this->load->view('page_layout', $data);
	}

	function order_lists(){
		$filter='';
		if(isset($_GET['filter_order_status'])){
		$filter = 'and order_status = "'.$_GET['filter_order_status'].'"';
		}
		verify_session_helper();
		$data =  array();
		
		if(isset($_GET['page'])){
		$page = $_GET['page'];
		}
		else{
			$page = 1;
		}
		$data['total_order'] = $this->Order->get_count_user_order($_SESSION['user_account']['user_id']);

		$config['uri_segment'] = 3;
		$config['total_rows'] = $data['total_order'];
		$config['per_page'] = 3;

		$data['list_order'] = $this->Order->list_user_order($_SESSION['user_account']['user_id'], $limit=5, $filter);
		$this->pagination->initialize($config);
		$data['page_layout']='pages/order/order_list';
		$this->load->view('page_layout', $data);
	}

	function order_details($transaction_id){
		verify_session_helper();
		$data =  array();
		$data['order_detail'] = $this->Order->get_transaction_order_details($transaction_id, $_SESSION['user_account']['user_id']);
		$data['list_product_order'] = $this->Order->list_product_order($data['order_detail']['order_ref']);
		$data['page_layout']='pages/order/order_detail';
		$this->load->view('page_layout', $data);
	}

	// clear cart
	// display order response page
	// list order page
	// order detail page
	// email page

}