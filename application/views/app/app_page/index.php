
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

							<!-- mobile menu button : show -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
								<svg width="25" viewBox="0 0 20 20">
									<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
									<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
									<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
									<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
								</svg>
							</button>

							<!-- 
								Logo : height: 70px max
							-->
							<a class="navbar-brand" href="index.html">
								<img src="<?php echo base_url();?>assets/images/logo/<?php echo $_SESSION['company_account']['company_logo'];?>" width="110" height="70" alt="...">
								<img src="http://localhost:8020/vms/assets/images/logo/<?php echo  $_SESSION['company_account']['company_logo'];?>" width="110" height="70" alt="...">

							</a>

						</div>




						<!-- Menu -->
						<!--

							Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
								.dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
								.dropdown-menu-hover 		- open on hover
								.dropdown-menu-clean 		- no background color on hover
								.dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
								.dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
								.dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

								Repositioning long dropdown childs (Example: Pages->Account)
									.dropdown-menu-up-n100 		- open up with top: -100px
									.dropdown-menu-up-n100 		- open up with top: -150px
									.dropdown-menu-up-n180 		- open up with top: -180px
									.dropdown-menu-up-n220 		- open up with top: -220px
									.dropdown-menu-up-n250 		- open up with top: -250px
									.dropdown-menu-up 			- open up without negative class


								Dropdown prefix icon (optional, if enabled in variables.scss)
									.prefix-link-icon .prefix-icon-dot 		- link prefix
									.prefix-link-icon .prefix-icon-line 	- link prefix
									.prefix-link-icon .prefix-icon-ico 		- link prefix
									.prefix-link-icon .prefix-icon-arrow 	- link prefix

								.nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
								.nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

								Mobile animation - add to .navbar-collapse:
								.navbar-animate-fadein
								.navbar-animate-bouncein

						-->
						<div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


							<!-- MOBILE MENU NAVBAR -->
							<div class="navbar-xs d-none"><!-- .sticky-top -->

								<!-- mobile menu button : close -->
								<button class="navbar-toggler pt-0" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
									<svg width="20" viewBox="0 0 20 20">
										<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
									</svg>
								</button>

								<!-- 
									Mobile Menu Logo 
									Logo : height: 70px max
								-->
								<a class="navbar-brand" href="index.html">
									<img src="assets/images/logo/logo_dark.svg" width="110" height="70" alt="...">
								</a>

							</div>
							<!-- /MOBILE MENU NAVBAR -->

						</div>






					</nav>

				</div>
				<!-- /NAVBAR -->

			</header>
			<!-- /HEADER -->


		



			<!-- COVER -->
			<section class="p-0 jarallax overlay-dark overlay-opacity-6 text-white">

				<!-- jarallax image -->
				<img class="jarallax-img" src="http://localhost:8020/vms/assets/images/background/
					<?php  
					if(!empty($_SESSION['company_account']['company_background_image']))
					{ 
						echo $_SESSION['company_account']['company_background_image'];}else{echo 'slide5.jpg';}?>" alt="...">

				<div class="container"> 
				<div class="row"> 

					<div class="d-middle col-12 col-md-6 min-h-100vh text-center-xs">

						<div class="mt-7overflow-hidden mb-4 row">

							<!-- <h1 class="font-weight-light mb-4">
								Welcome to <span class="text-warning font-weight-medium">smarty</span>, 
								<span class="font-weight-medium">multipurpose template</span>!
							</h1> -->
							
							<div class="col-sm-6">
								
								<a href="#" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs bg-success-soft-hover js-ajax-modal " href="#"
									data-href="<?php echo base_url().'app/boxes/checkin_box/checkin';?>" 
									data-ajax-modal-size="modal-lg" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-support fs--45 "></i>
									<h3 class="fs--20">FIRST VISIT</h3>
								</a>
							</div>
							<div class="col-sm-6">
								<a href="#" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs bg-warning-soft-hover js-ajax-modal " href="#"
									data-href="<?php echo base_url().'app/boxes/checkin_box/pre-visit';?>" 
									data-ajax-modal-size="modal-md" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-support fs--45 "></i>
									<h3 class="fs--20">HERE BEFORE</h3>
								</a>
							</div>
								
							
							<div class="col-sm-6">
							
								<a href="#" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs bg-warning-soft-hover js-ajax-modal " href="#"
									data-href="<?php echo base_url().'app/boxes/checkin_box/appointment';?>" 
									data-ajax-modal-size="modal-md" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-support fs--45 "></i>
									<h3 class="fs--20">APPOINTMENT</h3>
								</a>
							</div>
							<div class="col-sm-6">
								<a href="#" class="btn btn-danger btn-block transition-hover-top btn-soft mb-3 p-5 d-block-xs  js-ajax-modal " href="#"
									data-href="<?php echo base_url().'app/boxes/checkin_box/checkout';?>" 
									data-ajax-modal-size="modal-md" 
									data-ajax-modal-centered="true" 
									data-ajax-modal-callback-function=""
									data-ajax-modal-backdrop="static">
								<i class="fi fi-support fs--45 "></i>
									<h3 class="fs--20">SIGN OUT</h3>
								</a>
							
							</div>

						</div>

					</div>


					<div class="col-12 col-lg-6 text-align-end text-center-md text-center-xs aos-init aos-animate" data-aos="fade-in" data-aos-delay="50">

							<div class="d-inline-block  shadow-primary-xs rounded p-5 p-4-xs w-100 max-w-450 text-align-start mt-7" style="background-image: none;" data-jarallax-original-styles="background-image:url('demo.files/images/unsplash/covers/perry-grone-lbLgFFlADrY-unsplash.jpg')">
								
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

					<a href="#!" class="btn btn-pill btn-light shadow-none transition-hover-top">
						<i class="fi fi-layers-middle"></i>
						Join Smarty Comunity
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




