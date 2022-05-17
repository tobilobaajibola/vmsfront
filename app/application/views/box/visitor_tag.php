					<!-- wow rotateIn -->
					
						

						<div class="row gutters-sm mb-3">
							
							<div class="col-12 col-xl-12 mb-3">

								<!-- portlet -->
								<div class="portlet">

									<!-- portlet : header -->
									<div class="portlet-header">
										<span class="d-block text-dark text-truncate font-weight-medium">
											Visitors Tag
										</span>
									</div>
									<!-- /portlet : header -->


									<!-- portlet : body -->
									<div class="portlet-body">

										<div class="row h-80 d-flex align-items-center">

											<!-- avatar -->
											<div class="col-12 col-md-4 col-xl-4 text-center">
												<h4>TAG NO:<?php echo $visitor_tag_data['visitor_tag'];?></h4>
												<!-- 
													Based on `SOW : File Upload` 
													
													For ajax:
													documentation/plugins-sow-file-upload.html 
												-->
											<?php if(!empty($visitor_tag_data['capture_name'])){
												?>
										<span class="w--200 h--200 rounded d-inline-block bg-light bg-cover lazy"
											data-background-image="<?php echo base_url();?>assets/images/captures/<?php echo $visitor_tag_data['capture_name'];?>">
											</span>
											<?php
										}
											else{
												?>
											<span data-initials="<?php echo $visitor_tag_data['firstname'].' '. $visitor_tag_data['lastname'];?>" class="sow-util-initials bg-danger-soft fs--50 m-0 w--200 h--200 rounded d-inline-flex justify-content-center align-items-center">
												<i class="fi fi-circle-spin fi-spin"></i>
											</span>
											<?php
										}?>
												<h5 class="d-block"><?php echo $visitor_tag_data['firstname'].' '. $visitor_tag_data['lastname'];?></h5>

											</div>
											<!-- /avatar -->

											<div class="col my-3">

												<!-- EMAIL ADDRESS -->
												
												<div class="input-group-over">
													<div class="form-label-group">
														<input required="" readonly="" placeholder="Email Address" id="account_email" name="account[email]" type="email" class="form-control fs--20" value="<?php echo $visitor_tag_data['visitor_email'];?>">
														<label for="account_email"><span class="text-danger">Email</span></label>
													</div>
													<div class="form-label-group mt-3">
														<input required="" readonly="" placeholder="Email Address" id="account_email" name="account[email]" type="email" class="form-control fs--20" value="<?php echo $visitor_tag_data['organization'];?>">
														<label for="account_email"><span class="text-danger">Organization</span></label>
													</div>
													<div class="form-label-group mt-3">
														<input required="" readonly="" placeholder="Email Address" id="account_email" name="account[email]" type="email" class="form-control fs--20" value="<?php echo $visitor_tag_data['purpose'] .'( to see'. $visitor_tag_data['employee_firstname'] .' '. $visitor_tag_data['employee_lastname'].')' ;?>">
														<label for="account_email"><span class="text-danger">Purpose and who to see</span></label>
													</div>
												</div>

											</div>
											<div class="col-md-12">
											<a href="<?php echo base_url();?>"><button  class="btn btn-primary btn-block"><i class="fa fa-check"></i>DONE</button> </a>
										</div>
										</div>
										
									</div>
									<!-- /portlet : body -->

								</div>
								<!-- /portlet -->

							</div>





						</div>
						