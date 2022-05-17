
      <!-- modal header not used -->

      <button type="button" class="close cursor-pointer z-index-10 w--30 h--30 position-absolute top-0 end-0 my-2 mx-3" data-dismiss="modal" aria-label="Close">
         <span class="fi fi-close fs--25 position-absolute end-0 top-0" aria-hidden="true"></span>
      </button>


      <div class="modal-body p-0 m-5 m-4-xs">
               <h5 class="text-center pb-3">HOPE YOU ENJOYED YOUR VISIT?</h5>

      <div class="accordion" id="accordionAccount">
       <div id="alert_success" >
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		</div><!-- /Alert Success -->
		<div class="done_image_class" style="display: none;">
			<img class="img-responsive img-center" src="<?php echo base_url();?>assets/images/background/
				<?php  
				if(!empty($_SESSION['company_account']['company_checkout_image']))
				{ 
					echo $_SESSION['company_account']['company_checkout_image'];
				}
					
				else{
					echo 'nice_day.png';
				}
					?>">
			<div class="card-footer">
			<a href="<?php echo base_url();?>"><button  class="btn btn-primary btn-v"><i class="fa fa-check"></i>DONE</button> </a>
		</div>
		</div>
		<!-- Alert Failed -->
		<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			
		</div> 

            <!-- SIGN UP -->
            <!-- <form class="collapse bs-validate" novalidate method="post" action="#" id="accordionAccountSignUp" data-parent="#accordionAccount"> -->
               <form class="collapse bs-validate hide_after_submit  show" novalidate id="checkoutvisitor" autocomplete="off"  data-parent="#accordionAccount" autocomplete="off">

					<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
					<input type="hidden" name="comment" value="by self" />
					<input type="hidden" name="checkout_desk" value="<?php echo $_SESSION['company_account']['desk_name'];?>"/>
					<input type="hidden" name="desk_id" value="<?php echo $_SESSION['company_account']['desk_id'];?>"/>

              	<div class="row mb--30">
					<div class="col-md-4">
						<label for="contact:name">VISITOR TAG ID *</label>
						<input required type="text" value="" class="form-control" name="visitor_tag" id="" placeholder="Visitor Tag">
					</div>
					<div class="col-md-8">
						<label for="contact:name" autocomplete="off">Phone No/Email *</label>
						<input required type="text" value="" class="form-control" name="phone_email" placeholder="Your registered phone or email">
					</div>
				</div>											

               <div class="row"> 
               	<div class="col-md-12">   
               		<button type="submit" class="btn btn-primary btn-soft btn-block">Check Out  </button>
               	</div>
               </div>
               <!-- /GDPR CONSENT -->

       

             <!--   <div class="text-center mt-5">
                  <a href="#login_user" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
                     Back to Sign In
                  </a>
               </div> -->

            </form>
			<div id="visitortag"></div>

            <!-- /SIGN UP -->
   <div class="collapse bs-validate"  id="captureaccordion" data-parent="#accordionAccount">

               <!-- <h5 class="text-center pb-3">capture</h5> -->
               <div class="row ">
               	<div class="col-md-12">
             	<div id="cature-controls">
				<div class="row">
					<div class="col-md-9">
					      <video id="capture-show"  style=" max-width: 440px; border-radius: 10px;" autoplay></video>
					  </div>
					<div class="col-md-3">
					<div id="overlay">
						<div id="overlaytext">
			     			 <!-- <input  type="button" value="Take Photo"  /> -->
			     			 <h2 id="capture-take" class="m-30" >
			     			 	<a href="#!" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs">
									<i class="fi fi-support fs--45 "></i>
										<h3 class="fs--20">CAPTURE</h3>
								</a>
							</h2>
						</div>
					</div>
					
				</div>
					
			    </div>
			      <div id="capture-canvas"></div>
			   </div>

               <!-- back -->
              <!--  <div class="text-center mt-5">
                  <a href="#checkinvisitor" class="d-block text-success text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
                     Nevermind, back to Sign In
                  </a>
               </div> -->
           </div>
           </div>
            </div>
 
         </div>

      </div>

      <div class="border-top text-muted fs--13 bg-light rounded-bottom p-3">
         <b>Privacy:</b> All data is secure, never transfered to a third party provider/service.
      </div>




