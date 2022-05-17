
		<div id="wrapper">


			<!-- HEADER -->
			<header id="header" class="shadow-xs">


				<!-- 
					TOP BAR NOTE
					add .bg-secondary if #top_bar used
				-->


				<!-- NAVBAR -->
				<div class="container position-relative">


			


					<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

						<div class="align-items-start">

						

							<!-- 
								Logo : height: 70px max
							-->
							<a class="navbar-brand" href="<?php echo base_url();?>">
								<img src="<?php echo base_url();?>assets/images/logo/<?php echo $_SESSION['company_account']['company_logo'];?>" class="w-100" alt="...">
								<img src="http://localhost:8020/vms/assets/images/logo/<?php echo  $_SESSION['company_account']['company_logo'];?>" class="w-100" alt="...">

							</a>

						</div>


				




					</nav>

				</div>
				<!-- /NAVBAR -->

			</header>
			<!-- /HEADER -->


		



			<!-- COVER -->
			<section class="p-0 jarallax overlay-dark overlay-opacity-6 text-white">

				<!-- jarallax image -->
				<img class="jarallax-img" src="<?php echo base_url();?>assets/images/background/
					<?php  
					if(!empty($_SESSION['company_account']['company_background_image']))
					{ 
						echo $_SESSION['company_account']['company_background_image'];}else{echo 'slide5.jpg';}?>" alt="...">

				<div class="container ml--0-md mr--0-md w-100-md" > 
				<div class="row"> 

					<div class="d-middle col-12 col-md-6 min-h-100vh text-center-xs">

						<div class="mt-7overflow-hidden mb-4 row">

							<!-- <h1 class="font-weight-light mb-4">
								Welcome to <span class="text-warning font-weight-medium">smarty</span>, 
								<span class="font-weight-medium">multipurpose template</span>!
							</h1> -->
							
							<div class="col-sm-6  col-lg-6 col-xs-6 col-6">
								
								<a href="#" class="btn btn-success btn-block  transition-hover-top mb-3 p-5 d-block-xs bg-success-soft-hover js-ajax-modal pr--0-md pl--0-md pt--0-xs pb--0-xs pl--0-xs pr--0-xs" href="#"
									data-href="<?php echo base_url().'boxes/checkin_box/checkin';?>" 
									data-ajax-modal-size="modal-lg" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-home fs--45 "></i>
									<h3 class="fs--16 h6-xs h6-md">FIRST VISIT</h3>
								</a>
							</div>
							<div class="col-sm-6 col-lg-6 col-xs-6 col-6">
								<a href="#" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs bg-warning-soft-hover js-ajax-modal pr--0-md pl--0-md pt--0-xs pb--0-xs pl--0-xs pr--0-xs" href="#"
									data-href="<?php echo base_url().'boxes/checkin_box/pre-visit';?>" 
									data-ajax-modal-size="modal-lg" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-support fs--45 "></i>
									<h3 class="fs--16 h6-xs h6-md">HERE BEFORE?</h3>
								</a>
							</div>
								
							
							<div class="col-sm-6 col-xs-6 col-6">
							
								<a href="#" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5  d-block-xs bg-warning-soft-hover js-ajax-modal pr--0-md pl--0-md pt--0-xs pb--0-xs pl--0-xs pr--0-xs" href="#"
									data-href="<?php echo base_url().'boxes/checkin_box/appointment';?>" 
									data-ajax-modal-size="modal-lg" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-pencil fs--45 "></i>
									<h3 class="fs--16 h6-xs h6-md">ACCESS CODE</h3>
								</a>
							</div>
							<div class="col-sm-6 col-xs-6 col-6">
								<a href="#" class="btn btn-danger btn-block transition-hover-top btn-soft mb-3 p-5  d-block-xs  js-ajax-modal pr--0-md pl--0-md pt--0-xs pb--0-xs pl--0-xs pr--0-xs" href="#"
									data-href="<?php echo base_url().'boxes/checkin_box/checkout';?>" 
									data-ajax-modal-size="modal-lg" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-power fs--45 "></i>
									<h3 class="fs--16 h6-xs h6-md">CHECK OUT</h3>
								</a>
							
							</div>

						</div>

					</div>


					<div class="col-12 col-md-6 d-middle text-align-end text-center-md text-center-xs aos-init aos-animate" data-aos="fade-in" data-aos-delay="50">

							<div class="d-inline-block  shadow-primary-xs rounded p-5 p-4-xs w-100 max-w-450 text-align-start" style="background-image: none;" data-jarallax-original-styles="background-image:url('demo.files/images/unsplash/covers/perry-grone-lbLgFFlADrY-unsplash.jpg')">
								
										<div class="container  text-center position-relative z-index-2">
					<!-- If logged in through front desk  -->
			<?php if($_SESSION['company_account']['loginchannel']=='frontdesk'){
				?>
					<div class="rounded-logo wow fadeIn" data-wow-delay="0.4s" >
								<div id="qrcode_load"></div>
								</div>
					<h3 class="font-weight-normal fs--16 mt-3 mb-5">
						SCAN TO CHECKIN<span class="text-warning"> FOR CHECKIN</span>
					</h3>

					<a href="<?php echo base_url();?>logout" class="btn btn-pill btn-light shadow-none transition-hover-top">
						<i class="fi fi-layers-middle"></i>
						VISTACKS LIMITED 
					</a>
					<?php
				}?>
	
				</div>
							</div>

						</div>
				</div>
			</div>
			</section>	
			<!-- /COVER -->




		</div><!-- /#wrapper -->
<?php
			if (!empty($company_ads)){
				?>
	<div id="onload_modal_shop" class="hide js-onload js-ajax-modal" 
		    data-href="<?php echo base_url().'boxes/checkin_ads';?>" 
		    data-ajax-modal-delay="3000" 
		    data-ajax-modal-size="modal-lg" 
		    data-ajax-modal-centered="true" 
		    data-ajax-modal-backdrop=""></div>

<?php
}
?>
