
		<div id="wrapper">


	
		



			<!-- COVER -->
			<section class="p-0 jarallax overlay-dark overlay-opacity-6 text-white">

				<!-- jarallax image -->
				<img class="jarallax-img" src="<?php echo base_url();?>assets/images/background/
					<?php  
					if(!empty($_SESSION['company_account']['company_background_image']))
					{ 
						echo $_SESSION['company_account']['company_background_image'];}else{echo 'slide5.jpg';}?>" alt="...">

				<div class="container" > 
				<div class="row"> 

				

					<div class="col-12 d-middle  text-align-end text-center-md text-center-xs aos-init aos-animate" data-aos="fade-in" data-aos-delay="50">
						
							<div class="d-inline-block  shadow-primary-xs rounded p-5 p-4-xs w-100 max-h-1000 max-w-450 text-align-start mt-7" style="background-image: none;" data-jarallax-original-styles="background-image:url('demo.files/images/unsplash/covers/perry-grone-lbLgFFlADrY-unsplash.jpg')">
								<h3 class="fs-30 fw-400 text-center mb-0"><?php echo $visitor_tag_data['firstname'].' '. $visitor_tag_data['lastname'];?> is at the Lobby</h3>
								<div class=" text-center position-relative mt-3 mb-3">
									
											
									<div id="alert_success" class="alert alert-success mb-30t" style="display:none;">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
									
									<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										
									</div> 		
								<form id="admit_visitor" class="hide_after_submit" autocomplete="off"  onsubmit="form_submitter('#admit_visitor', '<?php echo base_url();?>admit_checkin/<?php echo $checkin_data['checkin_ref'];?>' ); return false">
									<span class="w--300 h--300 rounded d-inline-block bg-light bg-cover lazy " data-background-image="<?php echo base_url();?>assets/images/captures/<?php echo $visitor_tag_data['capture_name'];?>"></span>
								<input type="hidden" name="company_id" value="<?php echo $checkin_data['company_id'];?>" />
								<input type="hidden" name="checkin_id" value="<?php echo $checkin_data['id'];?>" />
								<input type="hidden" name="admit_visitor" value="admit_visitor">
								<div class="form-label-group mb-3">
										<select class="form-control" name="accept_reject">
															<option value="">--- Select Option ---</option>
															<option value="1">Accept Checkin</option>
															<option value="2">Wait at the lobby</option>
															<option value="3">Reject Checkin</option>
														</select>

									<label for="contact_phone">Phone</label>
								</div>

								<div class="form-label-group mb-4">
									<textarea required placeholder="Message" id="contact_message" name="comment" class="form-control" rows="3"></textarea>
									<label for="contact_message">Remark/Comment *</label>
								</div>

							



								<!-- 
									Server detailed error
									!ONLY! If debug is enabled!
									Else, shown ony "Server Error!"
								-->
							



								<button type="submit" class="btn btn-primary btn-block " id="submit-button">
									Send Message
								</button>
								<button class="btn btn-primary btn-block hide" id="load-button" type="button" disabled >
									<i class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></i>
									Loading...
								</button>
							</form>
							<!-- /CONTACT FORM : AJAX -->
											<div class="mt-3">
											<a href="<?php echo base_url();?>logout" class="btn btn-pill btn-light shadow-none transition-hover-top">
						<i class="fi fi-layers-middle"></i>
						VISTACKS
					</a>
			
				</div>
							</div>

						</div>
				</div>
			</div>
			</section>	
			<!-- /COVER -->




		</div><!-- /#wrapper -->




