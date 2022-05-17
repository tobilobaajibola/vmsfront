
				<!-- INTRO -->
				<section class="bg-theme-color-light">

					<!-- svg shape -->
					<svg class="position-absolute top-0 start-0 end-0" viewBox="0 480.469 1000 39.062">
						<polygon fill="#FFFFFF" points="0,519.531 0,480.469 1000,480.469 "></polygon>
					</svg>

					<div class="container min-h-50vh pt-5"> 

						<div class="row text-center-xs d-middle">
							
							<div class="col-12 col-md-6 order-2 order-md-1 pb-5" data-aos="fade-up" data-aos-delay="0">

								<div class="mb-5">
									
									<h1 class="h2-xs font-weight-light mb-0">
										<span class="text-primary font-weight-medium">Vistacks</span> Demo Request
									</h1>
									
									<p class="h4 font-weight-medium mb-4">
										Test Vistacks real Power!
									</p>

									<p class="lead">
										Our mission is to transform the way visitor access facilities and how their data is been handled securely.
									</p>

								</div>

							</div>

							<div class="col-12 col-md-6 order-1 order-md-2 pb-5" data-aos="fade-up" data-aos-delay="200">

								<!-- svg image -->
								<img width="600" height="400" class="img-fluid" src="demo.files/svg/premium/production.svg" alt="...">

							</div>

						</div>


					</div>


					<!-- down arrow -->
					<i class="arrow arrow-lg arrow-bottom arrow-center border-theme-color-light"></i>

				</section>	
				<!-- /INTRO -->





				<!-- FORM -->
				<section>
					<div class="container">


						<div class="text-center mb-6">
							<div class="mx-auto max-w-600">
								<h2 class="h3-xs">
									Request a demo and explore the full power of our platform
								</h2>
							</div>
						</div>


						<div class="col-md-8 offset-md-2">
							<!-- 
								CONTACT FORM : AJAX [TESTED|WORKING AS IT IS]

									Plugin required: SOW Ajax Forms

									In order to work as ajax form, SOW Ajax Forms should be available/enabled
									Else, SOW Form Validation plugin is used.
									If none of them are available, normal submit is used and you can remove:
										.js-ajax
										.bs-validate
										novalidate
										any data-ajax-*
										any data-error-*

									** Remove data-error-toast-* for no error toast notifications




								Ajax will control success/fail alerts according to server response:
									
									1. unexpected error: 		if server response is this string: {:err:unexpected:}
									2. mising mandatory:		if server response is this string: {:err:required:}
									3. success:					if server response is this string: {:success:}
									
									data-ajax-control-alerts="true"
									data-ajax-control-alert-succes="#contactSuccess" 
									data-ajax-control-alert-unexpected="#contactErrorUnexpected" 
									data-ajax-control-alert-mandaroty="#contactErrorMandatory" 

								+++++++++++++++++++++++++++++++++++++++++++++++++++++++
									WORKING CONTACT! Edit your php/config.inc.php
								+++++++++++++++++++++++++++++++++++++++++++++++++++++++
							-->
							<form 	id="contact_forms"  onsubmit="form_submitter('#contact_forms', '<?php echo base_url();?>pages/contact_forms' );return false" class="bs-validate">


								<!-- 1. 
									optional, hidden action for your backend

									PHP Basic Example
									if($_POST['action'] == 'contact_form_submit') {
										... send message
									}
								-->
								<input type="hidden" name="subject" value="Request Demo" tabindex="-1"> 
								<!-- -->


								<!-- 2. 
									A very small optional trick (using .hide class instead of type="hidden") for some low spam robots. 
									If this is not empty, the process should stop. A normal user/visitor should not be able to see this field.

									PHP Basic Example
									if($_POST['norobot'] != '') {
										exit;
									}
								-->
								<input type="text" name="norobot" value="" class="hide" tabindex="-1"> 
								<!-- -->

								<div class="form-label-group mb-3">
									<input required placeholder="Name" id="contact_name" name="name" type="text" class="form-control">
									<label for="contact_name">Name</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="Email" id="contact_email" name="email" type="email" class="form-control">
									<label for="contact_email">Email</label>
								</div>

								<div class="form-label-group mb-3">
									<input required placeholder="Phone" id="contact_phone" name="phone" type="text" class="form-control">
									<label for="contact_phone">Phone</label>
								</div>

								<div class="form-label-group mb-4">
									<textarea required placeholder="Message" id="contact_message" name="message" class="form-control" rows="3"></textarea>
									<label for="contact_message">Message</label>
								</div>

								<!-- GDPR CONSENT -->
								<div class="clearfix bg-light position-relative rounded p-4 mb-4">

									<span class="text-muted fs--12 d-block position-absolute bottom-0 end-0 m-2">
										EU GDPR
									</span>

									<label class="form-checkbox form-checkbox-primary">
										<input required type="checkbox" name="contact_gdpr">
										<i></i> 
										<span> 	
											I consent that my data is being stored in 
											line with the guidelines set out in  
											<a href="page-terms-and-conditions.html" target="_blank">Privacy Policy</a>. 
										</span>
									</label>

								</div>
								<!-- /GDPR CONSENT -->




								<!-- 
									Server detailed error
									!ONLY! If debug is enabled!
									Else, shown ony "Server Error!"
								-->
								<div id="ajax_dd_contact_response_container"></div>

								<!-- {:err:unexpected:} internal server error -->
								<div id="contactErrorUnexpected" class="hide alert alert-danger p-3">
									Unexpected Error!
								</div>

								<!-- {:err:required:} mandatory fields -->
								<div id="contactErrorMandatory" class="hide alert alert-danger p-3">
									Please, review your data and try again!
								</div>

								<!-- {:success:} message sent -->
								<div id="contactSuccess" class="hide alert alert-success p-3">
									Thank you for your message!
								</div>




								<button type="submit" class="btn btn-primary btn-block">
									Request Demo
								</button>

							</form>
							<!-- /CONTACT FORM : AJAX -->


						</div>

					</div>
				</section>
				<!-- /FORM -->
