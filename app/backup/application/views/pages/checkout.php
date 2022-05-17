

			<section class="b-0 alternate">
				<div class="container">

					<div class="row">
						<div class="col-sm-8 offset-sm-2">

							<div class="alert alert-light b-0">

								<h2 class="fs-30 fw-400 text-center mb-0">HOPE YOU ENJOYED YOUR VISIT</h2>
								
								<hr>
							

								<div class="block">


						
									<!-- Alert Success -->
									<div id="alert_success" class="alert alert-success mb-30">
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

									<form id="checkoutvisitor" autocomplete="off" >
										<fieldset>
											<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
											<div class="row">
												<div class="col-md-4">
													<label for="contact:name">VISITOR TAG ID *</label>
													<input required type="text" value="" class="form-control" name="visitor_tag" id="" placeholder="Visitor Tag">
												</div>
												<div class="col-md-8">
													<label for="contact:name" autocomplete="off">Phone No/Email *</label>
													<input required type="text" value="" class="form-control" name="phone_email" placeholder="Your registered phone or email">
												</div>
											</div>

										</fieldset>

										<div class="row">
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-v" value="CHECK OUT">
											</div>
										</div>
									</form>


								</div>

							</div>

						</div>
					</div>

				</div>
			</section>

