<?php

function checkout_product_helper(){
			
			$ci = & get_instance();

			$subscription_category_id = $_REQUEST['product_id'];
	        $amount = $_REQUEST['amount'];
	        $total_amount = $_REQUEST['total_amount'];
	        // $duration = $_REQUEST['duration'];
	        $duration = 12;
	       	$order_ref = uniqid();
	       	date_default_timezone_set('UTC');
	        $purchase_date =  date ("Y-m-d");
	        $purchase_time =  date("H:i");
	        $transaction_random_string= random_string('alnum', 5);
	        $transaction_id = 'subscribe'.$transaction_random_string.''.$order_ref;
	       

	    	
		
			// save each subscrition order
			// place order
	       //  foreach ($subscription_category_id as $k=>$v) {
	      	// $transaction_random_string= random_string('alnum', 5);     
			     //    $subscription_data = array(
			     //                        'product_id' => $subscription_category_id[$k],
			     //                        'user_id' => $_SESSION['user_account']['user_id'],
			     //                        'order_id'=>$order_ref,
			     //                        'amount'=>$amount[$k],
			     //                        'quantity'=>1,
			     //                        'subscription_category_id'=> $subscription_category_id[$k],
			     //                        'order_date'=> $purchase_date,
			     //                        'order_time' => $purchase_time,
			     //                        'duration_month' => $duration
			     //                        );
	   				// $ci->Subscription->create_subscription($subscription_data);
	       // 		}

	       		// Save the sum of all product order
	       		 $subscription_payment_data=  array(
	 							'order_ref' => $order_ref,
	 							'user_id' => $_SESSION['user_account']['user_id'],
	 							'email' => $_SESSION['user_account']['email'],
	 							'total_amount' => $ci->input->post('total_amount'),
	 							'transaction_id' => $transaction_id,
	 							'payment_option' => $ci->input->post('payment_option'),
                				'order_status'=> 'processing',
               				 );
	 			$ci->Subscription->pay_subscription($subscription_payment_data);
	       		
	       				
	         			if($ci->db->affected_rows() > 0)
	         		 {

	                // set the response and exit
	         		 $total_amount = $subscription_payment_data['total_amount'];
	         		 $total_amount_paystack = $total_amount.'00';
	         		  echo  json_encode(['total_amount'=> $total_amount.'00', 'total_amount_paystack'=> $total_amount.'00', 'email'  => $_SESSION['user_account']['email'], 'transaction_id' => $transaction_id]);

           		 }
           	 else{
                //set the response and exit
                $ci->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
}

?>