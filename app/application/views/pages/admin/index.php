<!--
						PAGE TITLE
					-->
					<div class="page-title bg-transparent b-0">

						<h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
							Dashboard
						</h1>
						
					</div>
					



					<!-- Primary -->
					<section class="rounded mb-3">


						<!-- graph header -->
						<div class="clearfix fs--18 pt-2 pb-3 mb-3 border-bottom">

							<!-- save image -->
							<a href="#" data-chartjs-id="visitsvsorders" data-file-name="visitsvsorders" class="btn btn-sm btn-light rounded-circle chartjs-save float-end m-0" title="Save Chart" aria-label="Save Chart">
								<i class="fi fi-arrow-download m-0"></i>
							</a>
							<!-- /save image -->

							Visits &amp; Orders
							<small class="fs--11 text-muted d-block mt-1">VISITOR'S DASHBOARD</small>
						
<div class="js-curl-command"></div>
						</div>
						<!-- /graph header -->



						<div class="row gutters-sm">

							<!-- MAIN GRAPH -->
							<div class="col-12 col-lg-7 col-xl-8 mb-5">

								<div class="row gutters-sm">

						<div class="col-12 col-md-6 col-xl-6 mb-3">

							<!-- small graph widget -->
							<a href="<?php echo base_url();?>admin/checkin">
							<div class="bg-white shadow-md text-dark p-5 rounded text-center">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-user-plus mt-1"></i>
								</span>

								<h3 class="fs--20 mt-5">
									<?php echo $checkin['count'] ;?> Visitors
								</h3>

								<p>
									Visitors Currently checked in
								</p>

								
							</div>
							<!-- /small graph widget -->
						</a>
						</div>
						<div class="col-12 col-md-6 col-xl-6 mb-3">

							<!-- small graph widget -->
							<a href="<?php echo base_url();?>admin/checkin">
								<div class="bg-white shadow-md text-dark p-5 rounded text-center">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-user-plus mt-1"></i>
								</span>

								<h3 class="fs--20 mt-5">
									<?php echo $visits['count'] ;?> Visits
								</h3>

								<p>
									Total visits today
								</p>

							</div>
						</a>
							<!-- /small graph widget -->

						</div>
						<div class="col-12 col-md-6 col-xl-6 mb-3">

							<!-- small graph widget -->
							<a href="<?php echo base_url();?>admin/appointment"><div class="bg-danger shadow-md text-dark p-5 rounded text-center ">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-user-plus mt-1"></i>
								</span>

								<h3 class="fs--20 mt-5">
									<?php echo $appointments['count'];?> Appointment
								</h3>

								<p>
									Today
								</p>

								

							</div>
						</a>
							<!-- /small graph widget -->

						</div>



						<div class="col-12 col-md-6 col-xl-6 mb-3">

							<!-- small graph widget -->
							<a href="<?php echo base_url();?>admin/visitor_tag"><div class="bg-white shadow-md text-dark p-5 rounded text-center">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-cart-1 mt-1"></i>
								</span>

								<h3 class="fs--20 mt-5">
									<?php echo $no_of_tag ;?> Tags
								</h3>

								<p>
									Available
								</p>

							
							</div>
						</a>
							<!-- /small graph widget -->
							
						</div>





					</div>
					<!-- /WIDGETS -->

							</div>
							<!-- /MAIN GRAPH -->

							
						<!-- WIDGET : TICKETS -->
						<div class="col-12 col-xl-4 mb-3">

							<div class="portlet">
								
								<div class="portlet-header">

									<div class="float-end dropdown">

										<!-- reload ajax content -->
										<a href="#" id="summaryTicketListReloadBtn" aria-label="Reload Content" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											<span class="group-icon">
												<i class="fi fi-circle-spin"></i>
												<i class="fi fi-circle-spin fi-spin"></i>
											</span>
										</a>

										<!-- dropdown -->
										<button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownRecent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fi fi-dots-vertical m-0"></i>
										</button>

										<!--
											
											Note: .dropdown-menu-click-update
												is the key class to set the link active on click
												and close dropdown (if .dropdown-click-ignore is not set)
										
										-->
										<div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert dropdown-menu-click-update end-0 mt-2" aria-labelledby="dropdownRecent">

											<div class="dropdown-header">
												Filter Tickets
											</div>

											<!--

												Note: these are working ajax links!
												html_frontend/documentation/plugins-sow-ajax-navigation.html

												Both plugins are working together:
													SOW : Ajax Navigation
													SOW : Ajax Content

												data-href used here, instead of href to hide
												the link from "open in new tab" actions

											-->
											<a class="dropdown-item js-ajax" 
												href="#"
												data-href="<?php echo base_url();?>admin/box/recent_checkin" 
												data-ajax-target-container="#summaryTicketList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												Admit
											</a>

											<a class="dropdown-item js-ajax" 
												href="#"
												data-href="<?php echo base_url();?>admin/box/recent_checkin" 
												data-ajax-target-container="#summaryTicketList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												Wait
											</a>

											<a class="dropdown-item js-ajax" 
												href="#"
												data-href="<?php echo base_url();?>admin/box/recent_checkin" 
												data-ajax-target-container="#summaryTicketList" 
												data-ajax-update-url="false" 
												data-ajax-show-loading-icon="true" 
												data-ajax-autoscroll-to-content="false">
												Reject
											</a>

											<small class="p-4 text-gray-500">* working ajax links</small>
										</div>
										<!-- /dropdown -->

									</div>

									<span class="d-block text-muted text-truncate font-weight-medium">
										Recent Checkin
									</span>

								</div>


								<!-- content loaded via ajax! -->
								<div id="summaryTicketList" 
										data-ajax-url="<?php echo base_url();?>admin/box/recent_checkin" 
										data-ajax-btn-reload="#summaryTicketListReloadBtn" 
										class="js-ajax portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

									<!-- ajax content pushed here -->
									<div class="text-center p-5"><!-- loader indicator -->
										<i class="fi fi-circle-spin fi-spin fs--30 text-gray-300"></i>
									</div>

								</div>

								<div class="d-flex align-self-baseline w-100 py-2">
									<a href="<?php echo base_url();?>admin/checkin" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
										<i class="fi fi-arrow-end-slim"></i>
										<span>View All</span>
									</a>
								</div>

							</div>

						</div>
						<!-- /WIDGET : TICKETS -->


						</div>

					</section>
					<!-- /Primary -->




		

					