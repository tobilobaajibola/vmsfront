
<div class="bg-white shadow-xs p-2 mb-4 rounded">
	<div class="clearfix bg-light p-2 rounded d-flex align-items-center">
		<a href="#!" class="js-ajax-modal bg-gradient-danger row-pill b-0 py-1 mb-0 float-start  p-2"
			data-href="<?php echo base_url();?>admin/box/add_appointment/" 
			data-ajax-modal-size="modal-lg" 
			data-ajax-modal-centered="false" 
			data-ajax-modal-backdrop="static">
		<i class="fi fi-plus"></i>	Add Appointment
		</a>
	</div>
</div>
<section id="section_3">
	<header class="d-flex b-0">
		

									<h2 class="h5 text-truncate w-100">
										Appointment
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



	<div class="tab-pane fade show active" id="listappointment" role="tabpanel" aria-labelledby="pills-icon-home-tab">
		<!-- <table class="table table-striped table-bordered table-hover" id="sample_1"> -->
			<!--
										
										data-autofill="false|hover|click" 
										data-enable-paging="true" 			false = show all, no pagination
										data-items-per-page="10|15|30|50|100" 

									-->
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
										data-options='["copy", "print"]' >
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th class="hidden-xs-down">Email</th>
								<th class="hidden-xs-down">Oragnization</th>
								<th class="hidden-xs-down">Expected Date</th>
								<th class="hidden">Host Name</th>
								<th class="hidden">Host Email</th>
								<th class="hidden">Host Phone</th>
								<th class="hidden">Host Extension</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list_appointment as $list_appointments) {
							?>
							<tr>
								<td><?php echo $list_appointments['firstname'] .' '.$list_appointments['lastname']  ?>
								<td><?php echo $list_appointments['phone']; ?></td>
								<td><?php echo $list_appointments['email']; ?>
								</td>
								<td><?php echo $list_appointments['organization']; ?>
								</td>
								<td ><?php echo $list_appointments['expected_date'] .' '. $list_appointments['expected_time']; ?>
								</td>
								<td class="hidden"><?php echo $list_appointments['employee_firstname']; ?></td>
								<td class="hidden"><?php echo $list_appointments['employee_email']; ?></td>
								<td class="hidden"><?php echo $list_appointments['employee_phone']; ?></td>
								<td class="hidden"><?php echo $list_appointments['employee_code']; ?></td>

							</tr>
							<?php
						}
						?>

						</tbody>
					</table>
	</div>

	</section>
