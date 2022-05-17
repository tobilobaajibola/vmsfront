			<?php
				 // a helper function to complete payment processing for different payment gateway
 						function process_payment_method_helper($transaction_details, $transaction_id, $transactionresults){
 							$data= array();
 							$ci = & get_instance();
							verify_session_helper();
							  $data['order_transaction_details'] = $ci->Order->get_transaction_order_details($transaction_id, $_SESSION['user_account']['user_id']);

			 					// check if the sum of the total amount paid is same with what is expected
			 				if($transaction_details['amount_returned'] == $data['order_transaction_details']['total_amount'])
			          {
 					            //update order table
			          			// update transaction order whether failure or success
			          	
					         $ci->Order->update_transaction_order_details($transaction_details);
	                          $data['transaction_details'] = $transaction_details;
					       if($transactionresults["status"]==true && $transactionresults["data"]["status"]=="success")
			             {
							// update transaction and user table	 
							 
							 // update transaction db
			       // unfinished
							$data['list_subscription_order_detail'] = $ci->Order->list_subscription_order_detail($data['order_transaction_details']['order_ref']);  

			             	foreach ($data['list_subscription_order_detail'] as $list_subscription_orders) {
			             	
			             	// generate ticket number
			             	$transaction_random_string= random_string('alnum', 5);
		        			$subscription_num=$_SESSION['user_account']['user_id'].''.$data['order_transaction_details']['orders_id'].''.$transaction_random_string;

		// create subscription for each package purchased
		$subscription_data = 	array(  'subscription_category_id' => $list_subscription_orders['category_id'],
								'subscription_order_id' => $list_subscription_orders['subscription_order_id'],
								'user_id' => $_SESSION['user_account']['user_id'],
								'company_id' => $_SESSION['user_account']['user_id'],
								'beneficiary_id' => $_SESSION['user_account']['user_id'],
								'start_date' => $list_subscription_orders['order_date'],
								'end_date' => date('Y-m-d', strtotime($list_subscription_orders['order_date'] . "+12 months") ),
								'duration' => $list_subscription_orders['duration_month'],
								'subscription_status' => 'inactive');
			$ci->Subscription->create_subscription($subscription_data);


		        			
		        			// generate qr code 

	        	 			// save PNG qr codes to server
    						// $tempDir =  'assets/images/qrcode/';
    						// $codeContents = $ticket_num;
						    // // we need to generate filename somehow, 
    						// // with md5 or with database ID used to obtains $codeContents...
    						// $fileName = 'tour'.md5($codeContents).'.png';
    					
    						// $pngAbsoluteFilePath = $tempDir.$fileName;
    						// $data['urlRelativeFilePath'] = base_url().'assets/images/qrs/'.$fileName;
    						// // generating qr code
    						// QRcode::png($codeContents, $pngAbsoluteFilePath);
										
							
							 $payment_response = 'Paid';
							 $book_response = 1;
							 $response = array('product_order_status' => $book_response, 'product_payment_status' => $payment_response, 'subscription_number' => $subscription_num);
							
							 //update subscription
							$ci->Order->update_subscription_order($list_subscription_orders['order_id'], $response);

							 
							
							//get Subscription category detail
							// $data['subscription_details']=$ci->Product->subscription_detail_by_id($list_subscription_orders['subscription_id']);

						}
						
							// kill cart session after update
							  $ci->cart->destroy();

							// echo date('Y-m-d',strtotime('+30 days',strtotime('2016/06/07'))) . PHP_EOL;
							// $available_tickets=($data['tour_transaction_details']['available_tickets']) - count($data['tour_booking_detail']);
	      //   				 $tour_data  = array('available_tickets' =>$available_tickets, 'tour_id' => $data['tour_transaction_details']['tour_id'] );
							//  $ci->Payment->update_tour($tour_data );
							


							  // send mail to the customer that purchased product  after the updating

							 //enable invoice ticket when add more is made active also update the invoice email template
					        $ci->email->from('mypadi@padimi.com.ng', 'Padimi');
		           			$ci->email->to($data['order_transaction_details']['email'], 'info@padimi.com.ng');
		           			// $ci->email->bcc('info@padimi.com.ng');
		                    $ci->email->subject('Order Invoice');
		                    // $ci->email->message($ci->load->view('email/invoice', $data, true ));
		                    // $ci->email->send();

							 // unset($transtref);
							 if ($data['order_transaction_details']['payment_option']==1) {
							 	
							 $data['response_msg'] = 'Payment success';
            				 echo  json_encode(['success_payment'=>'Successful', 'transaction_id' =>$transaction_id]);
            				 }
            				 else{
		                    ?>
		                     <form id="book_result" method="POST" action="<?php echo base_url()?>order/result">
							           <input type="hidden" name="transaction_id" value="<?php echo $transaction_id;?>"/>
							 </form>';
							             
				            <script type="text/javascript">
				                 document.getElementById('book_result').submit(); // SUBMIT FORM
				            </script>

							<?php
						}
						}

						else{
							// unset($transtref);
							$data['response_msg'] = 'Payment failure';
							echo json_encode(['error'=>'Payment failure']);
						}  
						
					       
					       

					        // $ci->load->view('payment_result', $data);
							// $tour_name = $transaction_id
		                    // redirect( base_url().'account/tour/details/'.$transaction_id, 'refresh'); 

							// echo json_encode(['response'=>$data['response_msg']]);

							     }
		                else{
							echo json_encode(['error'=>'inconsistent amount']);
		            
		                    // redirect('http://tour.transport2camp.com', 'refresh'); 
		                }
 }