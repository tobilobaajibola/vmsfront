
<!-- PAGE TITLE -->
            <!-- <section class="bg-light p-0">
                <div class="container py-5">

                    <h1 class="h3">
                       CART
                    </h1>

                </div>
            </section> -->
            <!-- /PAGE TITLE -->



                        <!-- PRODUCT GALLERY -->
              
                                        <div class="mb-60 box-border-shadow p-20 softhide" style="display: none" id="notifyaccount" >
                                   <div class="panel panel-default">
                        <div class="panel-body">

                            <strong>You are not logged in!</strong>
                            Please, <a href="<?php echo base_url();?>signin">login</a> or <a href="<?php echo base_url();?>signup">create an account</a> for later use.
                        </div>
                    </div>
                </div>
       <div></div>
                                        <?php
if (empty ($this->cart->contents())){
?>
<!-- EMPTY CART -->            <section>
                <div class="container">

                    <div class="row">

                        <div class="col-12 col-md-8 col-lg-9 order-md-1 mb-5">

                            <div class="text-center mb-5">
                                
                                <a href="#!" class="badge badge-pill badge-warning badge-soft font-weight-normal p-2">
                                    DON'T LOSE OUR BEST OFFERS
                                </a>

                                <h1 class="mb--80">
                                    Your cart is empty
                                </h1>

                                <img class="img-fluid max-w-350" src="<?php echo base_url();?>demo.files/svg/ecommerce/undraw_empty_cart_co35.svg" alt="...">

                            </div>

                        </div>



                        <div class="col-12 col-md-4 col-lg-3 order-md-2 mb-5">

                   <?php $this->load->view('box/advert');?>
                          
                        </div>

                    </div>

                </div>
            </section>
            <!-- /CART -->



                                        <!-- /EMPTY CART -->

<?php
}
else
{
?>                                        
    <!-- CART -->
    <section class="pt-0">
        <div class="container">

      <div class="container mt-2 pb-5">
         <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
               <div class="card bg-white border border-soft mb-0">
                  <div class="card-body px-lg-5 py-lg-5 login-box">
                     <div class="text-center mb-4"><h3 class="mb-3"><strong>SUBSCRIPTION SUMMARY</strong></h3></div>
                            <?php $this->load->view('cart/checkoutdata');?>      
                  </div>
               </div>
              <!--  <div class="row mt-3">
                  <div class="col-6"><a href="#" class="text-gray"><small>Forgot password?</small></a></div>
                  <div class="col-6 text-right"><a href="#" class="text-gray"><small>Create new account</small></a></div>
               </div> -->
            </div>
         </div>
      </div>
</div>
</section>
<?php echo form_open('path/to/controller/update/method'); ?>

<?php
}
?>

    

  


