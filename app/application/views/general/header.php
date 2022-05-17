    <!-- 
            OVERLAY NAVIGATION 
            Outside of #wrapper
            
            CSS HEADER REQUIRED:
            <link href="assets/css/header-0.css" rel="stylesheet" type="text/css" />
        -->
        <div id="topMain">
            <div class="menu-content">
                <div class="container">

                    <!-- menu close -->
                    <button id="menu_overlay_close">
                        <i>&times;</i>
                    </button><!-- /menu close -->

                    <div class="row">
                        <div class="col-md-8 col-xs-12 offset-md-2">

                            <div class="row">
                            
                                <div class="menu-list col-md-6 col-sm-6">

                                    <ul class="list-unstyled font-raleway">

                                        <li class="active"><!-- HOME -->
                                            <a href="<?php echo base_url();?>checkin">
                                                FIRST VISIT?
                                            </a>
                                        </li>
                                        <li><!-- ABOUT -->
                                            <a href="<?php echo base_url();?>pre-visit">
                                               HERE BEFORE?
                                            </a>
                                        </li>
                                        <li><!-- ROOMS -->
                                            <a href="<?php echo base_url();?>appointment">
                                               ACCESS CODE?
                                            </a>
                                        </li>
                                         <li><!-- ROOMS -->
                                            <a href="<?php echo base_url();?>checkout">
                                               SIGN OUT
                                            </a>
                                        </li>
                                    </ul>

                                </div>


                                <div class="text-right col-md-6 col-sm-6 hidden-xs-down">
                                    <div class="topMain-address letter-spacing-1 fs-16 fw-400">

                                        <p><!-- menu logo - optional -->
                                           <a href="<?php echo base_url();?>"> <img height="100" src="<?php echo base_url();?>assets/images/logo/<?php echo $_SESSION['company_account']['company_logo'];?>" alt=""></a>
                                        </p>

                                        <!-- <p>info@ysuntrustng.com</p> -->

                                        <!-- <p>
                                            Tel:    1800-123-467  <br />
                                                    1800-887-897
                                        </p>

                                        <p>
                                            NO 1 Oladele Olashore Street              <br>
                                            Off Sanusi Fafunwa    <br>
                                            Victoria Island, Lagos        <br>
                                        </p> -->

                                        <p><!-- SOCAL ICONS -->
                                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus" data-toggle="tooltip" data-placement="bottom" title="Google Plus">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin">
                                                <i class="icon-linkedin"></i>
                                                <i class="icon-linkedin"></i>
                                            </a>
                                            <a href="#" class="social-icon social-icon-sm social-icon-transparent social-flickr" data-toggle="tooltip" data-placement="bottom" title="Flickr">
                                                <i class="icon-flickr"></i>
                                                <i class="icon-flickr"></i>
                                            </a>
                                        </p><!-- /SOCAL ICONS -->
                                    </div>
                                </div>

                            </div>
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /OVERLAY NAVIGATION -->

        

