<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<?php $this->load->view('general/headtag');   ?>
	<body>

		<div id="wrapper">



			<!-- light logo : mobile -->
			<a aria-label="go back" href="index.html" class="position-absolute top-0 start-0 mt-3 mx-4 z-index-1 h--70 d-inline-flex align-items-center d-lg-none">
				<img src="assets/images/logo/logo_dark.svg" width="110" alt="...">
			</a>


			<!-- go back button : desktop -->
			<a href="index.html" class="btn btn-primary rounded-circle position-absolute top-0 start-0 mx-4 my-4 z-index-1 d-none d-lg-inline-block" aria-label="go back" title="go back" data-toggle="tooltip">
				<i class="fi fi-arrow-start"></i>
			</a>



			<div class="d-lg-flex min-h-100vh">

				<div class="col-12 col-lg-5 d-lg-flex bg-gradient-primary text-white d-none d-lg-block">
					<div class="w-100 align-self-center text-center">


						<div class="d-inline-block max-w-600">

							<!-- icon -->
							<div class="mb-5" data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">
								<span class="badge badge-primary fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-users mt-1"></i>
								</span>
							</div>


							<!-- light logo : desktop only -->
							<a href="index.html" class="text-decoration-none" data-aos="fade-in" data-aos-delay="150" data-aos-offset="0">
								<img class="w--150" src="assets/images/logo/logo_light.svg" alt="...">
							</a>


							<!-- quote / slogan -->
							<blockquote class="blockquote text-center mt-5" data-aos="fade-in" data-aos-delay="250" data-aos-offset="0">
								<h2 class="h4 m-auto font-weight-light font-italic text-white">
									Coming together is a beginning; keeping together is progress; working together is success.
								</h2>

								<footer class="blockquote-footer mt-4 fs--18 font-weight-light text-gray-400">
									<cite title="Source Title">Henry Ford</cite>
								</footer>
							</blockquote>


						</div>

					</div>
				</div>


				<div class="col-12 col-lg-7 d-lg-flex">
					<div class="w-100 align-self-center text-center py-7">


						<div class="max-w-600 w-100 d-inline-block text-align-start p-4">

							<!-- title -->
							<h1 class="text-primary text-center mb-5 font-weight-normal">
								Sign <span class="font-weight-medium">In</span> 
							</h1>

								
							<!-- optional class: .form-control-pill -->
							<form novalidate action="#" method="POST" class="bs-validate p-5 rounded shadow-xs">

								<input type="hidden" name="login" class="form-control" placeholder="Email" required="">

								
								<p class="text-danger">
							<?php echo $response_msg;?>
									
								</p>
								



								<div class="form-label-group mb-3">
									<input required placeholder="Email" id="company_code" name="company_code" type="text" class="form-control">
									<label for="account_email">Email</label>
								</div>

								<div class="input-group-over">
								
									<div class="form-label-group mb-3">
										<input required placeholder="Password" id="account_password" name="token" type="password" class="form-control">
										<label for="account_password">Password</label>
									</div>

									<a href="account-full-signin-password-2.html" class="btn fs--12">
										FORGOT?
									</a>

								</div>


								<div class="row">

									<div class="col-12 col-md-6 mt-4">
										<button type="submit" class="btn btn-primary btn-block">
											Sign In
										</button>
									</div>

									<div class="col-12 col-md-6 mt-4 text-align-end text-center-xs">
										<a href="account-full-signup-2.html" class="btn px-0">
											Don't have an account yet?
										</a>
									</div>

								</div>

							</form>


							<!-- cookie alert -->
							<div class="alert bg-white shadow-xs text-dark p-3 my-2 b-0 rounded d-inline-block w-100 max-w-600">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span class="fi fi-close" aria-hidden="true"></span>
								</button>
								Smarty uses cookies for best experience! <a href="#!" class="link-muted">Learn more</a>
							</div>

						</div>

					</div>
				</div>
				


			</div>







		</div><!-- /#wrapper -->

		<?php $this->load->view('general/foottag');   ?>
		
	</body>
</html>