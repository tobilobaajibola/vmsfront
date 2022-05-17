		
        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelMd">
                <i class="fi fi-envelope-2 text-muted"></i>
                <span class="d-inline-block pl-2 pr-2">
                   <?php echo $checkin_data['firstname'].' '. $checkin_data['lastname'];?>
                </span>
            </h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fi fi-close fs--18" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Content -->
        <div class="modal-body p--10">
		<div class="card <?php 	if($checkin_data['blacklist_status']== 1){echo 'text-danger';}?>">
								<div class="card-block ">
							<div class="row m-0">		
						<div class="col-md-5 col-sm-5">
							<div class="thumbnail text-center">
								
								<img class="visitor_image img-fluid" src="<?php echo base_url();?>assets/images/captures/<?php echo $checkin_data['capture_name'] ;?>" width="400"> 
								<!-- <h2 class="fs-18 mt-10 mb-0">Felica Doe</h2>
								<h3 class="fs-11 mt-0 mb-10 text-muted">DEVELOPER</h3> -->
							</div>
					
						
						</div>

						<div class="col-md-7 col-sm-7">
							<!-- Subtitle -->
							<div class="heading-title heading-border">
								<h2>TAG NO: <span><?php echo $checkin_data['visitor_tag'];?></span></h2>

								<ul class="list-inline categories m-0">
									<li><a href="#"><?php echo $checkin_data['organization'];?></a></li>
									
								</ul>

							</div>
							<!-- /Subtitle -->
									<!-- <p class="font-lato fs-18">Integer posuere erat a ante venenatis dapibus posuere velit aliquet nulla sed consectetur.</p> -->

									<ul class="portfolio-detail-list list-unstyled m-0">
										<li><span><i class="fa fa-user"></i>Name:</span> <?php echo $checkin_data['firstname'].' '. $checkin_data['lastname'];?></li>
										<li><span><i class="fa fa-calendar"></i>Time:</span><?php echo $checkin_data['check_in_time'];?></li>
										<li><span><i class="fa fa-lightbulb-o"></i>Purpose:</span> <?php echo $checkin_data['purpose'];?></li>
										<li><span><i class="fa fa-link"></i>Email:</span> <a href="#"><?php echo $checkin_data['visitor_email'];?></a></li>
										<li><?php 
										if($checkin_data['blacklist_status']== 0){
											echo '<span class="badge badge-success">Cleared </span>';
												}
										elseif($checkin_data['blacklist_status']== 1){
											echo '<span class="badge badge-danger">Blacklisted</span>';
										}
										?></li>
									</ul>
								</div>


							</div>
								
								
						</div>
					

					</div>
				</div>

					 <!-- Footer -->
        <div class="modal-footer">
        	   <div id="alert_success" class="alert alert-success " style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><!-- /Alert Success -->
            <!-- Alert Failed -->
            <div id="alert_fail" class="alert alert-danger " style="display: none;" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
            <?php 
           		if(empty($checkin_data['grant_access_status'])){

            		if($checkin_data['checkin_admit_status'] == 1){
            	?>

            	<form id="grant_visitor_access" class="hide_after_submit" onsubmit="form_submitter('#grant_visitor_access', '<?php echo base_url();?>api/grant_visitor_access' ); return false" >
            			<input type="hidden" name="grant_visitor">
		        		<input type="hidden" name="checkin_id" value="<?php echo $checkin_data['checkin_ref'];?>">
			            <button type="submit" class="btn btn-sm btn-pill btn-primary btn-soft">
			                <i class="fi fi-check"></i> 
			               Grant Access
			            </button>
		        </form>
        	<?php
        		}
        	}
        		elseif ($checkin_data['grant_access_status']==1) {
        			echo '<span class="badge badge-success">Access Granted</span>';
        		}

        		;?>
        	
            <button type="button" class="btn btn-sm btn-pill btn-light" data-dismiss="modal">
                <i class="fi fi-close"></i> 
                Cancel
            </button>
        </div>