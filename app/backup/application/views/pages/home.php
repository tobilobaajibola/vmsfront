


			<!-- -->
			<section id="slider" class="fullheight m-0" 
				data-background-delay="3500" 
				data-background-fade="1000" 
				data-background="
					<?php echo base_url();?>assets/images/background/
					<?php  
					if(!empty($_SESSION['company_account']['company_background_image']))
					{ 
						echo $_SESSION['company_account']['company_background_image'];}else{echo 'slide5.jpg';}?>
					
			">
				<!-- ,<?php //echo base_url();?>assets/images/markus-spiske-37931-min.jpg
					,<?php //echo base_url();?>assets/images/jolene-hardy-18952-min.jpg -->

				<!-- Backstretch Navigation -->
				<a class="bs-next" href="#"></a>
				<a class="bs-prev" href="#"></a>


				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
						<div class="container text-center">
			<h1 class="fw-300 mt-0 mb-0 wow fadeIn" data-wow-delay="0.6s">VISITOR'S LOG</h1>

			<!-- If logged in through front desk  -->
			<?php if($_SESSION['company_account']['loginchannel']=='frontdesk'){
				?>
					<div class="row">
						<div class="col-md-6">
									<div class="rounded-logo wow fadeIn" data-wow-delay="0.4s" >
											<img src="<?php echo base_url();?>assets/images/logo/<?php echo $_SESSION['company_account']['company_logo'];?>" alt=""  style="margin-top: 25%; margin-bottom: 25%;">
										</div>
							<h3>CLICK TO CHECKIN</h3>
						</div>
						<div  class="col-md-6">
							<div class="rounded-logo wow fadeIn" data-wow-delay="0.4s" >
								<div id="qrcode_load"></div>
								</div>
							<h3>SCAN TO CHECKIN</h3>
						</div>
					</div>
					<?php
				}
			// If logged in through qrcode

				elseif ($_SESSION['company_account']['loginchannel']=='qrcode') {
					?>
									<div class="rounded-logo wow fadeIn" data-wow-delay="0.4s" >
											<img src="<?php echo base_url();?>assets/images/<?php echo $_SESSION['company_account']['company_logo'];?>" alt=""  style="margin-top: 25%; margin-bottom: 25%;">
										</div>
						
				<?php
			}
				?>
							

							
						</div>

					</div>
				</div>




				<span class="raster overlay dark-3 z-index-0"><!-- dark|light overlay [0 to 9 opacity] --></span>


			</section>
			<!-- / -->




			


			<!-- 
				HOME SHOP - MODAL ON LOAD 
				
				data-autoload="true" 			- load modal on page load
				data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)
			-->
			<!-- load advert pop up if it exists -->
			<?php
			if (!empty($company_ads)){
				?>
			<div id="skorebotModal" class="modal fade" data-autoload="true" data-autoload-delay="2000">
				<div class="modal-dialog">
					<div class="modal-content" style="background-image:url('assets/images/ads/<?php echo $company_ads['ads_name'];?>')">

						<!-- header modal -->
						<div class="modal-header b-0">
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>

						<!-- body modal -->
						<div class="modal-body">

							<div class="block-content">

								<!-- <img src="assets/images/_smarty/logo-footer-dark.png" alt="" />
								<p class="fs-13 mb-20 mt-30">Subscribe to the Smarty newsletter to get all new products and all new discounts.</p> -->

								<!-- newsletter -->
								<!-- <div class="inline-search clearfix mb-20">
									<form action="php/newsletter.php" method="post" class="validate m-0" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right" novalidate="novalidate">

										<input type="search" placeholder="Email Address" id="shop_email" name="shop_email" class="serch-input required">
										<button type="submit">
											<i class="fa fa-check"></i>
										</button>
									</form>
								</div> -->
								<!-- /newsletter -->

								<!-- Don't show this popup again -->
								<!-- <div class="fs-11 text-left">
									<label class="checkbox float-left">
										<input class="loadModalHide" type="checkbox" />
										<i></i> <span class="fw-300">Don't show this popup again</span>
									</label>

								</div> -->
								<!-- /Don't show this popup again -->

							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- /HOME SHOP - MODAL ON LOAD -->
			<?php
		}
		?>


