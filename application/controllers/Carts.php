<?php

/**
* 
*/
class Carts extends CI_Controller
{
	public function __construct()
		{
				parent:: __construct();
               if(!isset($_SESSION)){
                // session_start();
            }
           		$this->load->library('cart');
          
		}

	function addtocart()
	{
    // first destroy existing cart
     $this->cart->destroy();

    $category_id= $this->input->post('category_id');
        // $product_id = 3;
    $data['product'] = $this->Subscription->subscription_category_detail($category_id);
    $cart_id=sha1($category_id);

    // $cart_id=uniqid();
	$data = array(
        array(
                'id'      => $cart_id,
                'qty'     => 12,
                'price'   => $data['product']['category_price'],
                'name'    => $data['product']['category_name'],
                'options' => array( 'product_id' => $this->input->post('category_id')
                                    )
             
        )

        );

                $this->cart->insert($data);
                echo  json_encode(['success'=>'Successfully Added to Cart <br/><small><a href="'.base_url().'cart">view cart</a></small>']);  

          //        $data['page_layout']='cart/view_cart';
          //       $this->load->view('page_layout', $data);
          // redirect('cart', 'refresh') ; 
	}

	function view_cart(){
        $data['page_layout']='cart/view_cart';
		$this->load->view('page_layout', $data);
        
	}

        function update_cart(){
                $data = array(
                'rowid' => $this->input->post('rowid'),
                'qty'   => $this->input->post('qty')
                );

                $this->cart->update($data);
        }
        function remove_cart_item($rowid){
            $data = array(
                'rowid' => $rowid,
                'qty'   => 0
                );
                $this->cart->update($data);
                redirect(base_url().'cart', 'refresh');
        }

        function clear_cart(){
                $this->cart->destroy();
        }

    function checkoutdata(){
        $data=array();
        $this->load->view('cart/checkoutdata', $data);
    }

     function cartcontents(){
        $data=array();
        $this->load->view('cart/cartcontent', $data);
    }


}
?>