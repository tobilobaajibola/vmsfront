

			<section class="b-0 alternate">
				<div class="container">

					<div class="row">
						<div class="col-sm-8 offset-sm-2">

							<div class="alert alert-light b-0">

								<h2 class="fs-30 fw-400 text-center mb-0">WE HAVE BEEN EXPECTING YOU</h2>
								
								<hr>
								<!-- 
								<p>
									Lorem ipsum dolor sit amet, 
								</p>

								<hr> -->


								<div class="block">


									
									
									<!-- Alert Success -->
									<div id="alert_success" class="alert alert-success mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
									<div id="visitortag"></div>

									<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										
									</div> 
									<!-- /Alert Failed -->

									<!-- Alert Mandatory
									<div id="alert_mandatory" class="alert alert-danger mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
									</div>
									 /Alert Mandatory -->

				<?php
				// $this->view('pages/visitor_tag');
				?>

							

									<form id="checkinappointment" autocomplete="off" >
										<fieldset>
											<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
											<!-- <input type="hidden" name="action" value="contact_send" /> -->

											<div class="row">
												<div class="col-md-12">
													<label for="contact:name">APPOINTMENT CODE *</label>
													<input required type="text" value="" class="form-control" name="appointment_code" id="" placeholder="Enter appoitment code sent to you">
												</div>
												
												<!-- <div class="col-md-12">
													<label for="contact:message">Message *</label>
													<textarea required maxlength="10000" rows="6" class="form-control" name="contact[message]" id="contact:message"></textarea>
												</div> -->
											</div>

										</fieldset>

										<div class="row">
											<div class="col-md-12">
												<!-- <button type="submit" class="btn btn-primary btn-v"><i class="fa fa-check"></i> CHECK IN</button> -->
												<input type="submit" class="btn btn-primary btn-v" value="CHECK IN">
											</div>
										</div>
										
									</form>
								

								</div>

							</div>

						</div>
					</div>

				</div>
				
			</section>
			<div id="loadingoverlay">
									<div class="cv-spinner">
										<span class="spinner"></span>
									</div>
								</div>
