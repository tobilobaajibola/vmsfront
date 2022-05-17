<div class="bg-white shadow-xs p-2 mb-4 rounded">
						<div class="clearfix bg-light p-2 rounded d-flex align-items-center">
							<a href="#!" class="js-ajax-modal bg-gradient-warning row-pill b-0 py-1 mb-0 float-start  p-2"
											data-href="<?php echo base_url();?>admin/box/add_employee/" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="false" 
											data-ajax-modal-backdrop="static">
										<i class="fi fi-plus"></i>	Add Employee
										</a>
							
							
						</div>
					</div>
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
								<th>Department</th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list_employee as $list_employees) {
							?>
							<tr>
								<td><a href="#!" class="js-ajax-modal btn btn-sm btn-primary btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 float-end"
											data-href="<?php echo base_url();?>admin/box/edit_employee/<?php echo $list_employees['id'];?>" 
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
								<td><?php echo $list_employees['firstname'] .' '.$list_employees['lastname'] ?>
								</td>
								<td><?php echo $list_employees['phone']; ?>
								</td>
								<td><?php echo $list_employees['email']; ?>
								</td>
								<td><?php echo $list_employees['department']; ?>
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

	


<!doctype html>





<style>



.outer-scontainer {

	background: #F0F0F0;

	border: #e0dfdf 1px solid;

	padding: 20px;

	border-radius: 2px;

}



.input-row {

	/*margin-top: 0px;

	margin-bottom: 20px;*/

}



.btn-submit {

	/*background: #333;

	border: #1d1d1d 1px solid;

	color: #f0f0f0;

	font-size: 0.9em;

	width: 100px;

	border-radius: 2px;

	cursor: pointer;*/

}



.outer-scontainer table {

	border-collapse: collapse;

	width: 100%;

}



.outer-scontainer th {

	border: 1px solid #dddddd;

	padding: 8px;

	text-align: left;

}



.outer-scontainer td {

	border: 1px solid #dddddd;

	padding: 8px;

	text-align: left;

}



#response {

    padding: 10px;

    margin-bottom: 10px;

    border-radius: 2px;

    display:none;

}



.success {

    background: #c7efd9;

    border: #bbe2cd 1px solid;

}



.error {

    background: #fbcfcf;

    border: #f3c6c7 1px solid;

}



div#response.display-block {

    display: block;

}

</style>



	
				<?php






?>

				<header id="page-header" style="display: none;">


										<h1>Upload CSV file</h1>;

									</header>

									<form action="assets/plugins/dropzone/upload.php" method="post" class="dropzone" id="my-dropzone"> </form>

				<?php



?>

<div class="container" style="display: none;">

<div class="panel panel-default">

							<div class="panel-heading panel-heading-transparent">

								<strong>File Upload</strong>

							</div>



							<div class="panel-body">



							

								

							

						

  <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>

    <div class="outer-scontainer">

        <div class="row">

        	<label>	</label>

        	<label>1.The column must be in this order (Category, Organisational Goal,	Team Goal,	Individual KPI, Measureable Target and weightage)</label>

        	<br>

        	<label>2. No header (meaning the first row should start with the contents)</label>

        	<br>

        	<label>4. All columns must be filled</label>

        	<br>

        	<label>5. It must be a CSV file</label>

        	<br>

        	<label>6. Weightage Must be Not be More than 100</label>

        	<br>

        	<label>7. <a href="sample.csv" target="_blank"><i class="fa fa-download"></i> Download Sample template here</a></label>

            <form class="form-horizontal" name="frmCSVImport"  id="frmCSVImport"  onsubmit="form_submitter('#frmCSVImport', '<?php echo base_url();?>api/bulkuploadhost' ); return false" enctype="multipart/form-data">
            	<input type="hidden" name="Import">
                <div class="nput-row">

                    <label class="col-md-12  ">Choose CSV

                        File</label> 

                    

                    <br />

                    <div class="row">

                    	<div class="col-md-6">

							<input type="file" name="file" id="file" accept=".csv" class="form-control">

							</div> <button type="submit"  class="btn-submit btn btn-3d btn-teal">Import KPI</button></div>

                </div>



            </form>



        </div>

            

    </div>

</div>

</div>

</div>

</section>

