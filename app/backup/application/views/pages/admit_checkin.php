

			<section class="b-0 alternate">
				<div class="container">

					<div class="row">
						<div class="col-sm-8 offset-sm-2">

							<div class="alert alert-light b-0">

								<h3 class="fs-30 fw-400 text-center mb-0"><?php echo $visitor_tag_data['firstname'].' '. $visitor_tag_data['lastname'];?> is at the Lobby</h3>
								
								<hr>
							


								<div class="block">


									
									
									<div id="alert_success" class="alert alert-success mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
									
									<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										
									</div> 
									<form id="admit_visitor" class="hide_after_submit" autocomplete="off"  onsubmit="form_submitter('#admit_visitor', '<?php echo base_url();?>admit_checkin/<?php echo $checkin_data['checkin_ref'];?>' ); return false">
										<fieldset>

										<input type="hidden" name="company_id" value="<?php echo $checkin_data['company_id'];?>" />
										<input type="hidden" name="checkin_id" value="<?php echo $checkin_data['id'];?>" />
											<input type="hidden" name="admit_visitor" value="admit_visitor">
											<div class="row">
												<div class="col-md-12 ">
													<label>
														<i></i> Accept / Reject Checkin
													</label>
													
													<div class="fancy-form fancy-form-select">
														<select class="form-control" name="accept_reject">
															<option value="">--- Select Option ---</option>
															<option value="1">Accept Checkin</option>
															<option value="2">Wait at the lobby</option>
															<option value="3">Reject Checkin</option>
														</select>

														<!--
															.fancy-arrow
															.fancy-arrow-double
														-->
														<i class="fancy-arrow"></i>
													</div>
												</div>
												<div class="fancy-form  col-md-12">
													<label for="contact:subject">Remark/Comment *</label>
													<textarea rows="5" class="form-control word-count" data-maxlength="200" data-info="textarea-words-info" placeholder="Type Comment" name="comment"></textarea>

												</div>
												
											</div>

										</fieldset>

										<div class="row">
											
											<div class="col-md-12">
												  <button type="submit" class="btn btn-primary btn-soft btn-block">
									                  Submit
									               </button>
												
											</div>

										</div>
									</form>


								</div>

							</div>

						</div>
					</div>

				</div>
			</section>

