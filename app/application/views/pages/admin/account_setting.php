	<!--

						PAGE TITLE
					-->
					<div class="page-title bg-transparent b-0">

						
						
					

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
							Account Settings
						</h1></a>
	</li>
	
	<li class="nav-item">
		<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
							Location Setting
						</h1></a>
	</li>	
</ul>
</div>
<div class="tab-content" id="pills-tabContent">
	
	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
	

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
0															data-file-btn-clear="a.js-file-upload-avatar-circle-remove"
															data-file-preview-img-cover="true"
															class="custom-file-input absolute-full">

													<svg class="fill-gray-500 rounded-circle m-4 z-index-0" viewBox="0 0 60 60">
														<path d="M41.014,45.389l-9.553-4.776C30.56,40.162,30,39.256,30,38.248v-3.381c0.229-0.28,0.47-0.599,0.719-0.951c1.239-1.75,2.232-3.698,2.954-5.799C35.084,27.47,36,26.075,36,24.5v-4c0-0.963-0.36-1.896-1-2.625v-5.319c0.056-0.55,0.276-3.824-2.092-6.525C30.854,3.688,27.521,2.5,23,2.5s-7.854,1.188-9.908,3.53c-2.368,2.701-2.148,5.976-2.092,6.525v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C1.801,46.924,0,49.958,0,53.262V57.5h46v-4.043C46,50.018,44.089,46.927,41.014,45.389z"></path>
														<path d="M55.467,46.526l-9.723-4.21c-0.23-0.115-0.485-0.396-0.704-0.771l6.525-0.005c0,0,0.377,0.037,0.962,0.037c1.073,0,2.638-0.122,4-0.707c0.817-0.352,1.425-1.047,1.669-1.907c0.246-0.868,0.09-1.787-0.426-2.523c-1.865-2.654-6.218-9.589-6.354-16.623c-0.003-0.121-0.397-12.083-12.21-12.18c-1.187,0.01-2.309,0.156-3.372,0.413c0.792,2.094,0.719,3.968,0.665,4.576v4.733c0.648,0.922,1,2.017,1,3.141v4c0,1.907-1.004,3.672-2.607,4.662c-0.748,2.022-1.738,3.911-2.949,5.621c-0.15,0.213-0.298,0.414-0.443,0.604v2.86c0,0.442,0.236,0.825,0.631,1.022l9.553,4.776c3.587,1.794,5.815,5.399,5.815,9.41V57.5H60v-3.697C60,50.711,58.282,47.933,55.467,46.526z"></path>
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


	</div>

	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		<section id="section_3">

	
	<header class="d-flex b-0">

									<h2 class="h5 text-truncate w-100">
										List Employee
									</h2>

									<div class="ui-options d-flex">

										<!-- fullscreen -->
										<a href="#" class="btn-toggle js-togglified" data-toggle-container-class="fullscreen" data-toggle-body-class="overflow-hidden" data-target="#section_3">
											<span class="group-icon">
												<i class="fi fi-expand"></i>
												<i class="fi fi-shrink"></i>
											</span>
										</a>

									</div>

								</header>
								<!--
	To remember last tab, add:
	.nav-link.nav-link-remember
-->



	<div class="table-responsive">
							
					
							

					<h4></h4>

					<table class="table-datatable table table-bordered table-hover table-striped" 
										data-lng-empty="No data available in table" 
										data-lng-page-info="Showing _START_ to _END_ of _TOTAL_ entries" 
										data-lng-filtered="(filtered from _MAX_ total entries)" 
										data-lng-loading="Loading..." 
										data-lng-processing="Processing..." 
										data-lng-search="Search..." 
										data-lng-norecords="No matching records found" 
										data-lng-sort-ascending=": activate to sort column ascending" 
										data-lng-sort-descending=": activate to sort column descending" 

										data-lng-column-visibility="Column Visibility" 
										data-lng-csv="CSV" 
										data-lng-pdf="PDF" 
										data-lng-xls="XLS" 
										data-lng-copy="Copy" 
										data-lng-print="Print" 
										data-lng-all="All" 

										data-main-search="true" 
										data-column-search="false" 
										data-row-reorder="false" 
										data-col-reorder="true" 
										data-responsive="true" 
										data-header-fixed="true" 
										data-select-onclick="true" 
										data-enable-paging="true" 
										data-enable-col-sorting="true" 
										data-autofill="false" 
										data-group="false" 
										data-items-per-page="10" 

										data-lng-export="<i class='fi fi-squared-dots fs--18 line-height-1'></i>" 
										data-export-pdf-disable-mobile="true" 
										data-export='["csv", "pdf", "xls"]' 
										data-options='["copy", "print"]' >	<thead>
							<tr>
								<th>Edit</th>
								<!-- <th>Delete</th> -->
								<th>Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Enable/Disable Auto Tag</th>
								
								
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list_location as $list_locations) {
							?>
							<tr>
								<td><a href="#!" class="js-ajax-modal btn btn-sm btn-primary btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 float-end"
											data-href="<?php echo base_url();?>admin/box/edit_location/" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="false" 
											data-ajax-modal-backdrop="static">
											+ Edit
										</a></td>
							<!-- 	<td>
									
										<a class="js-ajax-confirm  btn btn-sm btn-danger btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 float-end" href="#"
											data-href="<?php //echo base_url();?>admin/box/delete_employee/<?php //echo $list_employees['id'];?>" 
											data-ajax-confirm-mode="regular" 
											data-ajax-confirm-size="modal-md" 
											data-ajax-confirm-centered="true" 
				    						data-ajax-confirm-title="Please Confirm" 
											data-ajax-confirm-body="Do you want to delete <?php //echo $list_employees['firstname'];?> ?" 
											data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
											data-ajax-confirm-btn-yes-text="Yes, Delete" 
											data-ajax-confirm-btn-yes-icon="fi fi-check" 
											data-ajax-confirm-btn-no-class="btn-sm btn-light" 
											data-ajax-confirm-btn-no-text="Cancel" 
											data-ajax-confirm-btn-no-icon="fi fi-close">
											X Delete
										</a>
									</td -->
								<td><?php echo $list_locations['company_name']; ?>
								</td>
								<td><?php echo $list_locations['location_name']; ?>
								</td>
								<td><?php echo $list_locations['desk_name']; ?>
								</td>
								<td>	
									<!-- ?php if($list_locations['visitor_tag_ind']==0){
									echo 'Auto Tag';
								}
									else{
										echo 'Registered Tag';
									}
		?> -->
<form id="visitor_tag_ind" >
	<?php if($list_locations['visitor_tag_ind']==0){
		?>
	<label class="form-checkbox form-checkbox-pink form-checkbox-bordered">
		<input type="checkbox" name="visitor_auto_tag" value="1" onchange="form_submitter('#visitor_tag_ind', '<?php echo base_url();?>admin/boxes/enable_auto_tag' ); return false">
		<i></i> 
	</label>
	<?php
}
else{
	?>
	<label class="form-checkbox form-checkbox-pink form-checkbox-bordered">
		<input type="checkbox" name="visitor_auto_tag" value="0" checked onchange="form_submitter('#visitor_tag_ind', '<?php echo base_url();?>admin/boxes/enable_auto_tag' ); return false " checked>
		<i></i> 
	</label>
	<?php
}
?>
</form>
								</td>
								
							</tr>
							<?php
						}
						?>

						</tbody>
					</table>
				
					
				
				</div>
				</section>	
	</div>
	


</div>

	<!-- ADMIN LIST -->
					<div class="row gutters-sm">
						<div class="col-12 mb-3">

							<!-- portlet -->
							<div class="portlet">
							
								<!-- portlet : body -->
								<div class="portlet-body">

									<a id="adminListToggler" href="#listadmin" data-toggle="collapse" class="btn-toggle btn btn-light scroll-to" data-offset="-300" data-speed="600" data-toggle-target="#adminListToggler" data-toggle-container-class="hide">
										<i class="fi fi-locked"></i>
										List Admin
									</a>
									<div id="listadmin" class="collapse">

									<div class="table-responsive">
									
										<table class="table">

											<thead>
												<tr class="text-muted fs--13">
													<th class="w--100">&nbsp;</th>
													<th>ADMIN</th>
													<th class="w--250">ROLES</th>
													<th class="w--250">LAST LOGIN</th>
													<th class="w--150">&nbsp;</th>
												</tr>
											</thead>

											<tbody id="group_list">
												<?php 
												foreach ($list_admin as $list_admins) {
													?>
												
												<!-- ITEM -->
												<tr id="admin_user_1">
													<td class="text-center">

														<!-- no avatar image -->
														<span data-initials="John Doe" data-assign-color="true" class="sow-util-initials h6 m-0 w--50 h--50 rounded-circle d-inline-flex justify-content-center align-items-center"></span>

														<!-- avatar image -->
														<!--
														<span class="w--50 h--50 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="avatar.jpg"></span>
														-->

													</td>

													<td>

														<?php echo $list_admins['firstname'].' '.$list_admins['lastname'];?>
														
														<span class="d-block text-muted fs--12">
															<a href="mailto:john.doe@gmail.com" class="text-muted"><?php echo $list_admins['email'];?></a>
														
															<span class="d-block text-muted">
																Joined: Sep 01, 2019 / 03:14
															</span>

														</span>
													</td>


													<td class="text-danger">
														OWNER
													</td>


													<td class="text-muted">
														Nov 09, 2019 / 09:12
													</td>

												
													<td class="text-align-end">
														
														<div class="dropdown">
														
															<!-- Message -->
															<a href="#!" class="btn btn-sm rounded-circle btn-light mb-2 js-ajax-modal"
																 data-href="_ajax/admin_modal_message_write.html" 
																 data-ajax-modal-size="modal-md" 
																 data-ajax-modal-centered="false" 
																 data-ajax-modal-backdrop="static">
																<i class="fi fi-envelope-2"></i>
															</a>

															<!-- Options -->
															<a href="#!" class="btn btn-sm rounded-circle btn-light mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="fi fi-dots-vertical-full"></i>
															</a>

															<div class="prefix-link-icon prefix-icon-dot dropdown-menu">
																
																<h6 class="dropdown-header">
																	Options
																</h6>
																
																<a class="dropdown-item" href="#">
																	Edit Roles
																</a>

																<a href="#!" class="js-ajax-confirm dropdown-item text-danger"
																	data-href="/admin_user/admin_staff/?action=process:user:del&amp;user_id=1" 
																	data-ajax-confirm-body="Are you sure? Remove User?" 

																	data-ajax-confirm-mode="ajax" 
																	data-ajax-confirm-method="GET" 

																	data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
																	data-ajax-confirm-btn-yes-text="Yes" 
																	data-ajax-confirm-btn-yes-icon="fi fi-check" 

																	data-ajax-confirm-btn-no-class="btn-sm btn-light" 
																	data-ajax-confirm-btn-no-text="Cancel" 
																	data-ajax-confirm-btn-no-icon="fi fi-close"

																	data-ajax-confirm-success-target="#admin_user_2" 
																	data-ajax-confirm-success-target-action="remove">
																	Remove
																</a>

															</div>

														</div>

													</td>
												</tr>
												<!-- /ITEM -->
												<?php
											}
											?>


											</tbody>

										</table>

									</div>

								</div>
								</div>
								<!-- /portlet : body -->

							</div>
							<!-- /portlet -->

						</div>
					</div>
					<!-- /ADMIN LIST -->


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


	