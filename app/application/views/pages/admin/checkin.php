										<section id="section_3">
	<header class="d-flex b-0">

									<h2 class="h5 text-truncate w-100">
										TODAY'S VISITS
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


										<div id="clipboard_6" class="p--15 bg-white rounded">
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
										data-options='["copy", "print"]' >			<thead>
								<tr>
									<th scope="col">Img</th>
									<th scope="col">Visitor's name</th>
									<th scope="col">Tag</th>
									<th scope="col">Check in</th>
									<th scope="col">Check Out</th>
									<th scope="col">Status</th>
								</tr>
							</thead>

							<tbody>
								
								<?php
												foreach ($list_checkin as $list_checkins) {
													# code...
												?>
								<tr>
									<td class="text-center"><img class="float-start w--50 h--50 rounded-circle d-inline-block bg-light" src="<?php echo base_url();?>assets/images/captures/<?php echo $list_checkins['capture_name'];?>" class="img-fluid" alt="" width="40"></td>
									<td>
										<a href="#!" class="js-ajax-modal btn btn-sm btn-primary btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 "
											data-href="<?php echo base_url();?>admin/box/checkin_detail/<?php echo $list_checkins['checkin_id'];?>" 
											data-ajax-modal-size="modal-lg" 
											data-ajax-modal-centered="false" 
											data-ajax-modal-backdrop="static">
											<?php echo $list_checkins['firstname'].' '.$list_checkins['lastname'];?>
										</a>
										</td>
									<td><div class=" fs-13 fw-100"><?php echo $list_checkins['visitor_tag']; ?></div></td>
									
									<td>
										<ul class="list-inline m-0 fs-12">
											<li><?php echo $list_checkins['check_in_date']; ?></li>
											<li>(<?php echo $list_checkins['check_in_time']; ?>)</li>
										</ul>
									</td>
									<td>
										<ul class="list-inline m-0 fs-12">
											<li><?php echo $list_checkins['check_out_date']; ?></li>
											<li>(<?php echo $list_checkins['check_out_time']; ?>)</li>
										</ul>
									</td>
									<td>
										<?php 
										if($list_checkins['status']== "check in"){
											echo '<span class="badge badge-success">Checked in </span>';
												}
										elseif($list_checkins['status']== "check out"){
											echo '<span class="badge badge-danger">Checked out </span>';
										}
										?>
											</td>
								</tr>
								<?php
							}
							?>
							</tbody>
					</table>
									

				</div>
			</section>