

			<section class="b-0 alternate">
				<div class="container">

					<div class="row">
						<div class="col-sm-8 offset-sm-2">

							<div class="alert alert-light b-0">

								<h2 class="fs-30 fw-400 text-center mb-0">WELCOME BACK</h2>
								
								<hr>
							


								<div class="block">


									
									
									<div id="alert_success" class="alert alert-success mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
									<div id="visitortag"></div>
									
									<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										
									</div> 
									<form id="checkin_pre_visit" autocomplete="off">
										<fieldset>
											<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
											
											<div class="row">
												<div class="col-md-6">
													<label for="contact:name">Email *</label>
													<input required type="text" value="" class="form-control" name="email" id="">
												</div>
												<div class="col-md-6">
													<label for="contact:name">Phone number *</label>
													<input required type="text" value="" class="form-control" name="phone_number" id="">
												</div>
													<div class="autosuggest search-box col-md-12">
													<label for="contact:subject">Who to see *</label>
													
											        <input type="text" autocomplete="off" name="employeename" placeholder="Search for employee..." class="form-control" />
											        <div class="result_input"></div>
											        <div class="result"></div>
												</div>
													<div class="col-md-12">
													<label for="contact:subject">Purpose *</label>	
												<div class="fancy-form fancy-form-select">
													<select class="form-control" name="purpose">
														<option value="">Select purpose for Visit</option>
														<option value="Official">Official</option>
														<option value="Interview">Interview</option>
														<option value="Personal">Personal</option>
													</select>
													<i class="fancy-arrow"></i>
												</div>
												</div>

											</div>

										</fieldset>

										<div class="row">
											
											<div class="col-md-12">
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

