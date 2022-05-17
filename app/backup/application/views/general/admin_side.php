	<!-- LEFT -->
		<aside id="aside-main" class="aside-start aside-primary aside-hide-xs d-flex flex-column h-auto">


					<!-- 
						LOGO 
						visibility : desktop only
					-->
					<div class="d-none d-sm-block">
						<div class="clearfix d-flex justify-content-between">

							<!-- Logo : height: 60px max -->
							<a class="w-100 align-self-center navbar-brand p-3" href="<?php echo base_url();?>admin">
								<img src="<?php echo base_url();?>assets/images/logo/skorebot_logo.png" width="110" height="60" alt="...">
							</a>

						</div>
					</div>
					<!-- /LOGO -->


					<div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

						<!--

							All parent open navs are closed on click!
							To ignore this feature, add .js-ignore to .nav-deep
		
							Links height (paddings):
								.nav-deep-xs
								.nav-deep-sm
								.nav-deep-md  	(default, ununsed class)

							.nav-deep-hover 	hover background slightly different
							.nav-deep-bordered	bordered links


							++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
							IMPORTANT NOTE:
								Curently using ajax navigation!
								remove .js-ajax class to have regular links!
							++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
						-->
						<nav class="nav-deep nav-deep-dark nav-deep-hover pb-5">
							<ul class="nav flex-column">

								<li class="nav-item <?php if($this->uri->segment(2)== ""){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin">
										<i class="fi fi-dashboard"></i>
										<b>Dashboard</b>
									</a>
								</li>

								<li class="nav-item <?php if($this->uri->segment(2)== "checkin"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/checkin">
										<i class="fi fi-task-list"></i>
										<b>Checkins</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== "appointment"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/appointment">
										<i class="fi fi-time"></i>
										<b>Appointment</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== "visitor"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/visitor">
										<i class="fi fi-user-plus"></i>
										<b>Visitors</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== "employee"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/employee">
										<i class="fi fi-users"></i>
										<b>Employees</b>
									</a>
								</li>
								<li class="nav-item <?php if($this->uri->segment(2)== "visitor_tag"){echo "active";}?>">
									<a class="nav-link js-ajax" href="<?php echo base_url();?>admin/visitor_tag">
										<i class="fi fi-product-tag"></i>
										<b>Visitor Tags</b>
									</a>
								</li>
								
								<li class="nav-item">
								<li class="nav-title mt-5">
									<h6 class="fs--15 mb-1 text-white font-weight-normal">Pages</h6>
								</li>
								<li class="nav-item">
									<a class="nav-link js-ajax" href="#">
										<i class="nav-icon fi fi-database"><!-- main icon --></i>
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
										Account
									</a>
									<ul class="nav flex-column fs--15">
										<li class="nav-item">
											<a class="nav-link" href="<?php echo base_url();?>admin/account_setting">
												Settings
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?php echo base_url();?>admin/logout">
												Logout
											</a>
										</li>
										
									</ul>
								</li>
							</ul>
						</nav>

					</div>
				</aside>
				