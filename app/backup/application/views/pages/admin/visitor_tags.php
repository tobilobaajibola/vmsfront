<div class="bg-white shadow-xs p-2 mb-4 rounded">
						<div class="clearfix bg-light p-2 rounded d-flex align-items-center">
							<a href="#!" class="js-ajax-modal bg-gradient-warning row-pill b-0 py-1 mb-0 float-start  p-2"
											data-href="<?php echo base_url();?>admin/box/add_visitor_tag/" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="false" 
											data-ajax-modal-backdrop="static">
										<i class="fi fi-plus"></i>	Add Visitor Tag
										</a>
							
							
						</div>
					</div>
<section id="section_3">

	
	<header class="d-flex b-0">

									<h2 class="h5 text-truncate w-100">
										List Visitor Tag
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
								<th>Delete</th>
								<th>Tag no</th>
								<th>Status</th>
								<th>Visitor Name</th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list_visitor_tag as $list_visitor_tags) {
							?>
							<tr>
							
								<td>
									
										<a class="js-ajax-confirm  btn btn-sm btn-danger btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 float-end" href="#"
											data-href="<?php echo base_url();?>admin/box/delete_employee/<?php echo $list_visitor_tags['id'];?>" 
											data-ajax-confirm-mode="regular" 
											data-ajax-confirm-size="modal-md" 
											data-ajax-confirm-centered="true" 
				    						data-ajax-confirm-title="Please Confirm" 
											data-ajax-confirm-body="Do you want to delete <?php echo $list_visitor_tags['tag_no'];?> ?" 
											data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
											data-ajax-confirm-btn-yes-text="Yes, Delete" 
											data-ajax-confirm-btn-yes-icon="fi fi-check" 
											data-ajax-confirm-btn-no-class="btn-sm btn-light" 
											data-ajax-confirm-btn-no-text="Cancel" 
											data-ajax-confirm-btn-no-icon="fi fi-close">
											X Delete
										</a>
									</td>
								
								<td><?php echo $list_visitor_tags['tag_no']; ?>
								</td>
								<td><?php if($list_visitor_tags['status']==0){echo "Available";}else{ echo "In Use";} $list_visitor_tags['status']; ?>
								</td>
								<td>
									<?php echo $list_visitor_tags['visitor_firstname'].' '.$list_visitor_tags['visitor_lastname']; ?>
								</td>
								<td>
								</td>
						
							</tr>
							<?php
						}
						?>

						</tbody>
					</table>
				
					
				
				</div>
				</section>	