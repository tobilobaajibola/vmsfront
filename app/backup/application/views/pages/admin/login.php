
			<!-- light logo -->
			<a aria-label="go back" href="index.html" class="position-absolute top-0 start-0 my-2 mx-4 z-index-3 h--70 d-inline-flex align-items-center">
				<img src="<?php echo base_url();?>assets/images/logo/skorebot_logo.png" width="110" alt="...">
			</a>


			<div class="d-lg-flex text-white min-h-100vh bg-gradient-default">

				<div class="col-12 col-lg-5 d-lg-flex">
					<div class="w-100 align-self-center">


						<div class="py-7">
							<h1 class="d-inline-block text-align-end text-center-md text-center-xs display-4 h2-xs w-100 max-w-600 w-100-md w-100-xs">
								Sign in
								<span class="display-3 h1-xs d-block font-weight-medium">
									Skorebot Admin
								</span>
							</h1>
						</div>


					</div>
				</div>


				<div class="col-12 col-lg-7 d-lg-flex">
					<div class="w-100 align-self-center text-center-md text-center-xs py-2">
							<?php echo $response_msg;?>

						<!-- optional class: .form-control-pill -->
						<form novalidate action="#" method="POST" class="bs-validate p-5 py-6 rounded d-inline-block bg-white text-dark w-100 max-w-600" autocomplete="off">

							<!--
							<p class="text-danger">
								Ups! Please check again
							</p>
							-->
							<input type="hidden" name="login" class="form-control" placeholder="Email" required="">

							<div class="form-label-group mb-3">
								<input required placeholder="Email" id="account_email" name="email" type="email" class="form-control">
								<label for="account_email">Email</label>
							</div>

							<div class="input-group-over">
								<div class="form-label-group mb-3">
									<input required placeholder="Password" id="account_password" name="password" type="password" class="form-control">
									<label for="account_password">Password</label>
								</div>

								<a href="<?php echo base_url();?>admin/forgot_password" class="btn fs--12">
									FORGOT?
								</a>

							</div>



							<div class="row">

								<div class="col-12 col-md-12 mt-4">
									<button type="submit" class="btn btn-primary btn-block transition-hover-top">
										Sign In
									</button>
								</div>

								<!-- <div class="col-12 col-md-6 mt-4 text-align-end text-center-xs">
									<a href="account-signup.html" class="btn px-0">
										Don't have an account yet?
									</a>
								</div> -->

							</div>

						</form>



					</div>
				</div>



			</div>


