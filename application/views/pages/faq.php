<!-- PAGE TITLE -->
			<section class="bg-white">
				<div class="container">

					<h1 class="h2">
						Frequently Asked Questions
					</h1>

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb fs--14">
							<li class="breadcrumb-item"><a href="#!">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">FAQ</li>
						</ol>
					</nav>

				</div>
			</section>
			<!-- /PAGE TITLE -->


<!-- FAQ -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-12 col-lg-4">
							<div class="sticky-kit">

								<div>

									<!--

										.nav-link class is required else Bootstrap Scrollspy will not work!
										Is limited to : nav component and list group!


										The layout is too round?
										Replace the classes:
											.rounded-xl  	=> 	.rounded
											.rounded-pill 	=> 	.rounded

									-->
									<ul id="list-example" class="p-2 list-unstyled nav-default shadow-md rounded-xl bg-white mb-5">
										<li class="px-3 py-2">
											<h2 class="h5 font-weight-normal text-primary">
												Quick Nav
											</h2>
										</li>
										<?php
								foreach ($list_faq as $list_faqs) {
								?>
								<li>
								<a class="nav-link rounded-pill scroll-to py-3" href="#<?php echo $list_faqs['id'];?>">
									<i class="fs--13 fi fi-arrow-end-slim"></i>
									<span><?php echo $list_faqs['question'];?></span>
								</a>
								</li>						
								<?php
								}
								?>

									</ul>

								</div>

							</div>
						</div>
						
						<div class="col-12 col-lg-8">

							<!--
								.article-format class will add some slightly formattings for a good text visuals. 
								This is because most editors are not ready formatted for bootstrap
								Blog content should come inside this container, as it is from database!
								src/scss/_core/base/_typography.scss
							-->
							<div class="bg-white p-5 p-4-xs rounded-xl article-format">
								<?php
								foreach ($list_faq as $list_faqs) {
								?>

								<h2 id="<?php echo $list_faqs['id'];?>" class="h4 text-primary font-weight-normal"><?php echo $list_faqs['question'];?></h2>	
								<p><?php echo $list_faqs['answer'];?></p>							
								<?php
								}
								?>

								
							</div>

						</div>

					</div>

				</div>
			</section>
			<!-- /FAQ -->
