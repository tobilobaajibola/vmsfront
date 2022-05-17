					<?php
												foreach ($list_checkin as $list_checkins) {
													# code...
												?>
									<!-- item -->
									
									<div class="p-3 border-bottom border-light">

										<!-- avatar -->
										<div class="clearfix mb-1 py-1">
											
											<!-- avatar -->

											
											<img class="float-start w--50 h--50 rounded-circle d-inline-block bg-light" src="<?php echo base_url();?>assets/images/captures/<?php echo $list_checkins['capture_name'];?>">
											<!-- name / time -->
											<span class="float-start px-4 mt-1">
												<a href="" class="text-dark"><?php echo $list_checkins['firstname'].' '.$list_checkins['lastname'];?></a>
												<small class="d-block text-muted"><?php  echo  timeago($list_checkins['check_in_time'].''.$list_checkins['check_in_date']);?></small>
											
												<small class="d-block text-muted"><?php echo $list_checkins['comment'];?> </small>
											</span>

											<!-- status -->
											<span class="float-end font-weight-medium fs--14 text-<?php echo $list_checkins['checkin_admit_status_indicator'];?>">
												<?php echo $list_checkins['checkin_admit_status_text'];?><br> 
									<button class="js-ajax-modal  btn btn-sm btn-primary btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 "
											data-href="<?php echo base_url();?>admin/box/checkin_detail/<?php echo $list_checkins['checkin_id'];?>" 
											data-ajax-modal-size="modal-md" 
											data-ajax-modal-centered="false" 
											data-ajax-modal-backdrop="static">
											<span class="text-primary">Open</span>
										</button>
											</span>

										</div>

									</div>
									<!-- /item -->
								<?php
											}
											?>

