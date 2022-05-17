

			<section class="b-0 alternate">
				<div class="container">

					<div class="row">
						<div class="col-sm-8 offset-sm-2">

							<div class="alert alert-light b-0">

								<h2 class="fs-30 fw-400 text-center mb-0">LET US MEET YOU</h2>
								
								<hr>
								<!-- 
								<p>
									Lorem ipsum dolor sit amet, 
								</p>

								<hr> -->


								<div class="block">


										
									<!-- Alert Success -->
									<div id="alert_success" class="alert alert-success mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									</div><!-- /Alert Success -->
									<div id="visitortag"></div>
									
									<!-- Alert Failed -->
									<div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										
									</div> 

									<!-- Alert Mandatory -->
									<div id="alert_mandatory" class="alert alert-danger mb-30">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
									</div><!-- /Alert Mandatory -->


									<form id="checkinvisitor" enctype="multipart/form-data" autocomplete="off">
										<fieldset>
											<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
											<!-- <input type="hidden" name="action" value="contact_send" /> -->
											  
											   <!-- Bootstrap Modal >-->


<div id="captureModal" class="modal fade capture-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Body -->
			<div class="modal-body">
				<div id="cature-controls">
				<div>
					<div id="overlay">
						<div id="overlaytext">
			     			 <!-- <input  type="button" value="Take Photo"  /> -->
			     			 <h2 id="capture-take" class="m-30" ><span class="badge badge-warning p-20"><i class="fa fa-camera"></i> Take Photo</span></h2>
						</div>
					</div>
			      <video id="capture-show" autoplay></video>
			    </div>
			      <div id="capture-canvas"></div>
			   </div>
			</div>


		</div>
	</div>
</div>


											 
											<div class="row">
												<div class="col-md-6">
													<label for="contact:name" autocomplete="off">First Name *</label>
													<input required type="text" value="" class="form-control" name="first_name" id="contact:first_name">
												</div>
												<div class="col-md-6">
													<label for="contact:email" autocomplete="off">Last Name *</label>
													<input required type="text" value="" class="form-control" name="last_name" id="contact:last_name">
												</div>
												<div class="col-md-6">
													<label for="contact:phone">Phone Number *</label>
													<input required type="number" value="" class="form-control" name="phone_number" id="contact:phone_number">
												</div>
												<div class="col-md-6">
													<label for="contact:email">Email </label>
													<input  type="email" value="" class="form-control" name="email" id="contact:email">
												</div>
												<div class="col-md-6">
													<label for="contact:subject">Organization *</label>
													<input required type="text" value="" class="form-control" name="organization" id="contact:organization">
												</div>
												<div class="autosuggest search-box col-md-6">
													<label for="contact:subject">Who to see *</label>
													<!-- <select class="form-control select2 result" >
														<option value="">--- Select 2 ---</option>
													</select> -->
													<!-- <input type="text" name="employee_id" placeholder="Employee's Name" value="1" class="form-control typeahead" /> -->	
											        <input type="text" autocomplete="off" name="employeename" placeholder="Search for employee..." class="form-control" />
											        <div class="result_input"></div>
											        <div class="result"></div>
												</div>

												<div class="col-md-12">
													<label for="contact:subject">Purpose *</label>	
												<div class="fancy-form fancy-form-select">
													<select class="form-control" name="purpose">
														<option value="">Select purpose for Visit</option>
														<?php foreach ($reason_for_visits as $reason_for_visit) {
														?>
														<option value="<?php echo $reason_for_visit['text_desc'];?>"><?php echo $reason_for_visit['text_desc'];?></option>
														<?php
														}
														?>
													</select>
													<i class="fancy-arrow"></i>
												</div>
												</div>

											</div>
											<div class="box-static box-border-top text-center" id="capture-trigger" >
												<div type="button" id="capture-btn" class=" box-title" data-toggle="modal" data-target="#captureModal" >
													<h4><i class="fa fa-camera"></i> CAPTURE IMAGE</h4>
												</div>
											</div>
										</fieldset>
										 <!-- append the capture filenemae after -->
											  <div id="capture_input"></div>
										
									</form>


								</div>

							</div>

						</div>
					</div>

				</div>
			</section>

<style type="text/css">
	position: absolute;
    top: 100%;
    left: 0px;
    z-index: 100;
    display: none;
    background-color: #fff;
    /* top: 38px !important; */
    width: 100% !important;
    padding: 6px !important;
    background-color: #fff;
    border: #ccc 2px solid;
    border-top: 0;
    margin: 30p;
    height: 100px;
    overflow-y: hidden;
</style>