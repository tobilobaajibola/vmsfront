	<!--

						PAGE TITLE
					-->
					<div class="page-title bg-transparent b-0">

						<h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
							Account Settings
						</h1>
						
					</div>




					<form novalidate class="bs-validate d-block mb-7" method="post" action="#" enctype="multipart/form-data">
						
						<div class="row gutters-sm mb-3">
							
							<div class="col-12 col-xl-6 mb-3">

								<!-- portlet -->
								<div class="portlet">

									<!-- portlet : header -->
									<div class="portlet-header">
										<span class="d-block text-dark text-truncate font-weight-medium">
											Account Detail
										</span>
									</div>
									<!-- /portlet : header -->


									<!-- portlet : body -->
									<div class="portlet-body">

										<div class="row h-100 d-flex align-items-center">

											<!-- avatar -->
											<div class="col-12 col-md-4 col-xl-4 text-center">

												<!-- 
													Based on `SOW : File Upload` 
													
													For ajax:
													documentation/plugins-sow-file-upload.html 
												-->
												<label class="w--120 h--120 rounded-circle text-center position-relative d-inline-block cursor-pointer border border-secondary border-dashed bg-white">

													<!-- remove button -->
													<a href="#" class="js-file-upload-avatar-circle-remove hide position-absolute absolute-top w-100 z-index-3">
														<span class="d-inline-block btn btn-sm btn-pill bg-secondary text-white pt--4 pb--4 pl--10 pr--10 m--1 mt--n15" title="remove" data-tooltip="tooltip">
															<i class="fi fi-close m-0"></i>
														</span>
													</a>

													<span class="z-index-2 js-file-input-avatar-circle-container d-block absolute-full z-index-1 hide-empty"><!-- avatar container --></span>

													<!-- hidden input (out of viewport, or safari will ignore it) -->
													<!-- NOTE: data-file-preview-img-height="118 and <label> has .h--120 (120px). This is because we have a border - so we cut 2px (1px for each side) -->
													<input	name="account_avatar" 
															type="file" 

															data-file-ext="jpg, png" 
															data-file-max-size-kb-per-file="1024"
															data-file-ext-err-msg="Allowed:" 
															data-file-size-err-item-msg="File too large!"
															data-file-size-err-total-msg="Total allowed size exceeded!"
															data-file-toast-position="bottom-center"
															data-file-preview-container=".js-file-input-avatar-circle-container" 
															data-file-preview-show-info="false" 
															data-file-preview-class="rounded-circle m-0 p-0 animate-bouncein" 
															data-file-preview-img-height="118" 
															data-file-btn-clear="a.js-file-upload-avatar-circle-remove"
															data-file-preview-img-cover="true"
															class="custom-file-input absolute-full">

													<svg class="fill-gray-500 rounded-circle m-4 z-index-0" viewBox="0 0 60 60">
														<img src="<?php echo base_url();?>assets/images/logo/">
													</svg>

												</label>
												<small class="d-block">click to upload</small>

											</div>
											<!-- /avatar -->

											<div class="col my-3">

												<!-- EMAIL ADDRESS -->
												<div class="input-group-over">

													<div class="form-label-group">
														<input required readonly placeholder="Email Address" id="account_email" name="account[email]" type="email" class="form-control" value="<?php echo $_SESSION['admin_account']['email'];?>">
														<label for="account_email"><span class="text-danger">Email</span> Address</label>
													</div>

													<a id="email_edit_show" href="#!" class="btn transition-none sow-util-action" 
														data-util-self-ignore="true" 
														data-util-target-hide="#email_edit_show" 
														data-util-target-show="#email_edit_hide, #email_edit_password_request" 
														data-util-target-readonly-off="#account_email" 

														data-util-target-input="#account_email" 
														data-util-target-input-val="" 

														data-util-target-focus="#account_email">
														<i class="fi fi-pencil m-0"></i>
													</a>

													<a id="email_edit_hide" href="#!" class="btn transition-none sow-util-action hide" 
														data-util-self-ignore="true" 
														data-util-target-hide="#email_edit_hide, #email_edit_password_request" 
														data-util-target-show="#email_edit_show" 
														data-util-target-readonly-on="#account_email" 

														data-util-target-input="#account_email" 
														data-util-target-input-val="<?php echo $_SESSION['admin_account']['email'];?>">
														<i class="fi fi-close m-0"></i>
													</a>

												</div>

												<div id="email_edit_password_request" class="mt-3 hide">

													<!-- password -->
													<div class="input-group-over">
														<div class="form-label-group mb-3">
															<input placeholder="Account Password" id="account_password" name="account[password]" type="password" class="form-control">
															<label for="account_password">Account Password</label>
														</div>

														<!-- Show Password -->
														<a href="#" class="btn btn-password-type-toggle" data-target="#account_password">
															<span class="group-icon">
																<i class="fi fi-eye m-0"></i>
																<i class="fi fi-close m-0"></i>
															</span>
														</a>
													</div>
													<!-- /password -->

												</div>
												<!-- /EMAIL ADDRESS -->

											</div>

										</div>

									</div>
									<!-- /portlet : body -->

								</div>
								<!-- /portlet -->

							</div>




							<div class="col-12 col-xl-6 mb-3">

								<!-- portlet -->
								<div class="portlet">

									<!-- portlet : header -->
									<div class="portlet-header">
										<span class="d-block text-dark text-truncate font-weight-medium">
											Personal Detail
										</span>
									</div>
									<!-- /portlet : header -->


									<!-- portlet : body -->
									<div class="portlet-body">

										<div class="row gutters-sm d-flex align-items-center">

											<div class="col-12 col-md-6">

												<div class="form-label-group mt-3">
													<input required placeholder="First Name" id="account_first_name" name="first_name" type="text" value="<?php echo $_SESSION['admin_account']['firstname'];?>" class="form-control">
													<label for="account_first_name">First Name</label>
												</div>

											</div>

											<div class="col-12 col-md-6">

												<div class="form-label-group mt-3">
													<input required placeholder="Last Name" id="account_last_name" name="last_name" type="text" value="<?php echo $_SESSION['admin_account']['lastname'];?>" class="form-control">
													<label for="account_last_name">Last Name</label>
												</div>

											</div>

											<div class="col-12 col-md-6">

												<div class="form-label-group mt-3">
													<input placeholder="Company Name" id="account_company_name" name="company_name" type="text" value="<?php echo $_SESSION['admin_account']['firstname'];?>" class="form-control">
													<label for="account_company_name">Company Name</label>
												</div>

											</div>

											<div class="col-12 col-md-6">

												<div class="form-label-group mt-3">
													<input placeholder="Phone Number" id="account_phone_number" name="phone_number" type="text" value="" class="form-control">
													<label for="account_phone_number">Phone Number</label>
												</div>

											</div>

											<div class="col-12">

												<div class="form-label-group mt-3">
													<input placeholder="Address" id="account_address" name="account[address]" type="text" value="" class="form-control">
													<label for="account_address">Address</label>
												</div>

											</div>

										</div>

									</div>
									<!-- /portlet : body -->

								</div>
								<!-- /portlet -->

							</div>

						</div>


						<input  type="submit" class="btn btn-primary" placeholder="Save Changes" />
							<i class="fi fi-check"></i>
							
						</button>

					</form>





					<!-- PASSWORD RESET -->
					<div class="row gutters-sm mb-3">
						
						<div class="col-12 mb-3">


							<!-- portlet -->
							<div class="portlet">

								<!-- portlet : body -->
								<div class="portlet-body">

									<a id="passwordResetToggler" href="#passwordForm" data-toggle="collapse" class="btn-toggle btn btn-light scroll-to" data-offset="-300" data-speed="600" data-toggle-target="#passwordResetToggler" data-toggle-container-class="hide">
										<i class="fi fi-locked"></i>
										Reset Password
									</a>
									<div id="passwordForm" class="collapse">
										<div id="alert_success" class="alert alert-success mb-30  mt-4" style="display: none;">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											</div><!-- /Alert Success -->
											<!-- Alert Failed -->
											<div id="alert_fail" class="alert alert-danger mb-30 mt-4" style="display: none;" >
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											</div>
											<!-- <form id="change_password" action="<?php //echo base_url();?>admin/accounts/change_passwords" method="post"> -->
										<!-- portlet : header -->
												<div class="portlet-header pt-0 pb-5">
													<span class="d-block text-dark text-truncate font-weight-medium">
														Account Password
													</span>
												</div>
												<!-- /portlet : header -->
										<form novalidate class="bs-validate row" id="change_password"   onsubmit="form_submitter('#change_password', '<?php echo base_url();?>admin/accounts/change_passwords' ); return false">

											<div class="col-12 col-md-6 mb-3">
								
												

												<div class="row gutters-sm">

													<div class="col-12 col-xl-12 mb-3">
														
														<!-- current password -->
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input required placeholder="Current Password" id="account_current_password" name="currentpassword" type="password" class="form-control" value="">
																<label for="account_current_password">
																	<span class="text-danger">Current</span> Password
																</label>
															</div>

															<!-- Show Password -->
															<a href="#" class="btn btn-password-type-toggle" data-target="#account_current_password" tabindex="-1">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>
														</div>
														<!-- /current password -->

													</div>

													<div class="col-12 col-xl-6 mb-3">

														<!-- new password -->
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input required placeholder="New Password" id="account_new_password" name="newpassword" type="password" class="form-control" value="">
																<label for="account_new_password">
																	<span class="text-danger">New</span> Password
																</label>
															</div>

															<!-- Show Password -->
															<a href="#" class="btn btn-password-type-toggle" data-target="#account_new_password" tabindex="-1">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>
														</div>
														<!-- /new password -->

													</div>
													<div class="col-12 col-xl-6 mb-3">

														<!-- new password -->
														<div class="input-group-over">
															<div class="form-label-group mb-3">
																<input required placeholder="New Password" id="account_new_password" name="confirmpassword" type="password" class="form-control" value="">
																<label for="account_new_password">
																	<span class="text-danger">Confirm New</span> Password
																</label>
															</div>

															<!-- Show Password -->
															<a href="#" class="btn btn-password-type-toggle" data-target="#account_new_password" tabindex="-1">
																<span class="group-icon">
																	<i class="fi fi-eye m-0"></i>
																	<i class="fi fi-close m-0"></i>
																</span>
															</a>
														</div>
														<!-- /new password -->

													</div>

												</div>

												<i class="fi fi-check"></i>
												<input  type="submit" class="btn btn-warning mb-3 d-block-xs w-100-xs"/>
													


												<a id="passwordResetCancel" href="#passwordForm" data-toggle="collapse" class="btn-toggle btn btn-light mb-3 d-block-xs w-100-xs" data-toggle-temporized="10" data-toggle-target="#passwordResetToggler" data-toggle-container-class="hide active">
													<i class="fi fi-close"></i>
													Cancel
												</a>

											</div>

											<div class="col-12 col-md-6">

												<div class="w-100 h-100 bg-light rounded p-4 text-center-xs d-flex align-items-center">
													
													<div class="w-100 text-center-xs">

														<h6>
															Can't remember your current password?
														</h6>
														<a	href="#!" forgot_passwords

															class="btn-toggle btn btn-primary btn-soft" 
															data-toggle-temporized="5000" 
															data-toggle-ajax-url-on="<?php echo base_url();?>admin/accounts/forgot_passwords?user_password_reset=<?php echo $_SESSION['admin_account']['email'];?>"
															data-toast-success-message="Reset link sent to your email!" 
															data-toast-success-position="bottom-center">
															<span class="group-icon">
																<span>Reset via email</span>
																<span>
																	<i class="fi fi-circle-spin fi-spin"></i>
																	<span>Reset via email</span>
																</span>
															</span>
														</a>

													</div>

												</div>

											</div>

										</form>




									</div>

								</div>
								<!-- /portlet : body -->

							</div>
							<!-- /portlet -->


						</div>

					</div>
					<!-- /PASSWORD RESET -->
