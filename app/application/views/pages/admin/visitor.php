		
														<section id="section_3">
	<header class="d-flex b-0">

									<h2 class="h5 text-truncate w-100">
										VISITORS
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
					<div class="table-responsive">
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
									<th class="fw-30">Img</th>
									<th>Visitor's name</th>
									<th>Contact</th>
									<th>Organization</th>
									<th>Last Checkout</th>
									<th>Black listStatus</th>
								</tr>
							</thead>
							<tbody>
									<?php
												foreach ($list_visitor as $list_visitors) {
													# code...
												?>
								<tr>
									<td class="text-center">

										<?php
											if(!empty($list_visitors['capture_name'])){
												?>
									
												<img class="float-start w--50 h--50 rounded d-inline-block bg-light" src="<?php echo base_url();?>assets/images/captures/<?php echo $list_visitors['capture_name'];?>">
											<?php
										}
											else{
												?>
											<span data-initials="<?php echo $list_visitors['firstname'].' '. $list_visitors['lastname'];?>" class="float-start sow-util-initials bg-danger-soft fs--12 m-0 w--50 h--50 rounded d-inline-flex justify-content-center align-items-center lazy">
												<?php echo substr($list_visitors['firstname'], 0, 1);?> <?php echo substr($list_visitors['lastname'], 0, 1);?>
											</span>
											<?php
										}?>
										<!-- <img src="<?php echo base_url();?>assets/images/captures/<?php echo $list_visitors['capture_name'];?>" alt="" width="40"></td> -->
									<td><?php echo $list_visitors['firstname'].' '.$list_visitors['lastname'];?></td>
									<td><div class=" fs-13 fw-100"><?php echo $list_visitors['phone']; ?></div></td>
									<td> <div class=" fs-13 fw-100"><?php echo $list_visitors['organization'];?></div></td>
									<td>
										<ul class="list-inline m-0 fs-12">
											<li><?php echo $list_visitors['lastcheckout_date']; ?></li>
											<li>(<?php echo $list_visitors['lastcheckout_time']; ?>)</li>
										</ul>
									</td>
									
									<td>
										<?php 
										if($list_visitors['blacklist_status']== 0){
											echo '<span class="badge badge-success">Cleared </span>';
												}
										elseif($list_visitors['blacklist_status']== 1){
											echo '<span class="badge badge-danger">Not Cleared</span>';
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