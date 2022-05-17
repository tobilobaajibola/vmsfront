
      <!-- HEADER -->
      <header id="header">


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
              <a class="navbar-brand js-ajax" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/images/logo/vistack_logo.png"  alt="...">
              </a>

            </div>




            <!-- Menu -->
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
                <a class="navbar-brand js-ajax" href="fullajax-index.html">
                  <img src="<?php echo base_url();?>assets/images/logo/vistack_logo.png" width="110" height="40" alt="...">
                </a>

              </div>
              <!-- /MOBILE MENU NAVBAR -->



              <!-- NAVIGATION -->
              <ul class="navbar-nav">

                <!-- Features -->
                <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavFeatures">
                    Features
                  </a>

                  <div class="dropdown-menu dropdown-menu-clean dropdown-menu-hover w--350 p-0 overflow-hidden" aria-labelledby="mainNavFeatures">

                    <div class="row no-gutters bg-gradient-default">

                      <div class="col-2 d-none d-lg-block"><!-- empty -->
                        
                        <!-- text-rotate-90 , text-rotate-180 -->
                        <p class="h6 mb-0 text-warning text-rotate-180 text-center position-absolute d-middle">
                          CONVIENIENT • SECURED • 247
                        </p>

                      </div>

                      <div class="col bg-white overflow-hidden">

                        <ul class="mx-0 px-0 my-2">

                          <li class="dropdown-item text-wrap">
                            <a class="js-ajax dropdown-link text-dark transition-hover-start p-3" href="#">
                              <i class="fi fi-recycle float-start fs--25 mt--n2"></i>
                              <span class="h5-xs d-block fs--18">Admin Dashboard</span>
                              <span class="fs--15 text-muted">
                                The all in one digital software
                              </span>
                            </a>
                          </li>

                          <li class="dropdown-item text-wrap">
                            <a class="js-ajax dropdown-link text-dark transition-hover-start p-3 line-height-1" href="#">
                              <i class="fi fi-shape-abstract-cube float-start fs--25 mt--n2"></i>
                              <span class="h5-xs d-block fs--18">Visitor Checkin</span>
                              <span class="fs--11 text-muted text-uppercase">
                                Make your visitor feel at home
                              </span>
                            </a>
                          </li>

                          <li class="dropdown-item text-wrap">
                            <a class="js-ajax dropdown-link text-dark transition-hover-start p-3 line-height-1" href="#">
                              <i class="fi fi-target-simple float-start fs--25 mt--n2"></i>
                              <span class="h5-xs d-block fs--18">Instant Notification</span>
                              <span class="fs--15 text-muted">
                                Two way instant notification
                              </span>
                            </a>
                          </li>

                        </ul>

                        <div class="position-relative bg-theme-color-light py-4 px-3">

                          <h6>Enterprise</h6>


                          <ul class="mx-0 px-0">

                            <li class="dropdown-item bg-transparent text-wrap">
                              <a class="js-ajax dropdown-link bg-transparent text-dark px-2 py-1" href="fullajax-page-4.html">
                                <i class="fi fi-arrow-end"></i>
                                Demo
                              </a>
                            </li>

                            <li class="dropdown-item bg-transparent text-wrap">
                              <a class="js-ajax dropdown-link bg-transparent text-dark px-2 py-1" href="fullajax-page-5.html">
                                <i class="fi fi-arrow-end"></i>
                                API
                              </a>
                            </li>

                          </ul>

                        </div>

                      </div>

                    </div>


                  </div>

                </li>


                <li class="nav-item dropdown">

                  <a href="#" id="mainNavSolutions" class="nav-link dropdown-toggle" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false">
                    Solutions
                  </a>

                  <!--
                    
                    .dropdown-menu-invert = open invert

                  -->
                  <div aria-labelledby="mainNavSolutions" class="shadow-none dropdown-menu dropdown-menu-clean dropdown-menu-hover w--600 bg-gradient-default">                   
                    
                    <div class="row no-gutters col-border">
                      
                      <div class="col-12 col-lg-4 b-0-xs">

                        <!-- Documentation : no container, direct links! -->
                        <a href="fullajax-page-1.html" class="js-ajax dropdown-item transition-hover-top clearfix text-white py-4 fs--14 text-center">

                          <span class="d-block mb-4">
                            <i class="fi fi-brain fs--35"></i>
                          </span>

                          <b>PRE-REGISTER VISITOR</b>
                          <span class="d-block text-wrap mt-2 fs--14">
                            Anything is possible!
                          </span>
                        </a>

                      </div>

                      <div class="col-12 col-lg-4 b-0-xs">

                        <!-- Documentation : no container, direct links! -->
                        <a href="fullajax-page-2.html" class="js-ajax dropdown-item transition-hover-top clearfix text-white py-4 fs--14 text-center">

                          <span class="d-block mb-4">
                            <i class="fi fi-heart-empty fs--35"></i>
                          </span>

                          <b>CONTACTLESS CHECKIN</b>
                          <span class="d-block text-wrap mt-2 fs--14">
                            Same core, same elements!
                          </span>
                        </a>

                      </div>


                      <div class="col-12 col-lg-4 b-0-xs">

                        <!-- Documentation : no container, direct links! -->
                        <a href="fullajax-page-3.html" class="js-ajax dropdown-item transition-hover-top clearfix text-white py-4 fs--14 text-center">

                          <span class="d-block mb-4">
                            <i class="fi fi-layers fs--35"></i>
                          </span>

                          <b>FAST SETUP</b>
                          <span class="d-block text-wrap mt-2 fs--14">
                            Everything common!
                          </span>
                        </a>

                      </div>

                    </div>

                  </div>


                </li>



                <!-- Pricing -->
                <li class="nav-item dropdown">

                  <a href="<?php echo base_url();?>pricing" class="nav-link">
                    Pricing
                  </a>

                </li>



                <!-- How it works -->
                <li class="nav-item">

                  <a class="nav-link js-ajax" href="<?php echo base_url();?>how_it_works">
                    How it works
                  </a>

                </li>


                <!-- Contact -->
                <li class="nav-item">

                  <a class="nav-link js-ajax" href="<?php echo base_url();?>contact">
                    Contact Us
                  </a>

                </li>


                <!-- social : mobile only (d-block d-sm-none)-->
                <li class="nav-item d-block d-sm-none text-center mb-4">

                  <h3 class="h6 text-muted">Follow Us</h3>

                  <a href="#!" class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
                    <i class="fi fi-social-facebook"></i> 
                  </a>

                  <a href="#!" class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
                    <i class="fi fi-social-twitter"></i> 
                  </a>

                  <a href="#!" class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
                    <i class="fi fi-social-linkedin"></i> 
                  </a>

                  <a href="#!" class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
                    <i class="fi fi-social-youtube"></i> 
                  </a>

                </li>


              </ul>
              <!-- /NAVIGATION -->


            </div>





            <!-- OPTIONS -->
            <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">
  
              <li class="list-inline-item mx-1 dropdown">




                <a href="#" aria-label="Account Sign In" class="js-ajax-modal btn btn-sm btn-primary"
                  data-href="<?php echo base_url();?>pages/login"
                      data-ajax-modal-size="modal-md"
                      data-ajax-modal-centered="true"
                      data-ajax-modal-backdrop="static">
                  <span class="group-icon">
                    <i class="fi fi-user-male"></i>
                    <i class="fi fi-close"></i>
                  </span> 
                  <span>Account</span>
                </a>

                <!-- ALREADY SIGNED IN -->
                <!--
                <a href="#" aria-label="Account Options" id="dropdownAccountOptions" class="btn btn-sm btn-primary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                  <span class="group-icon">
                    <i class="fi fi-user-male"></i>
                    <i class="fi fi-close"></i>
                  </span> 
                  <span>Account</span>
                </a>

                <div aria-labelledby="dropdownAccountOptions" class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-clean dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15">
                  <div class="dropdown-header">
                    John Doe
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="account-orders.html" title="My Orders" class="dropdown-item text-truncate font-weight-light">
                    My Orders <small>(2)</small>
                  </a>
                  <a href="account-favourites.html" title="My Favourites" class="dropdown-item text-truncate font-weight-light">
                    My Favourites <small>(3)</small>
                  </a>
                  <a href="account-settings.html" title="Account Settings" class="dropdown-item text-truncate font-weight-light">
                    Account Settings
                  </a>
                  <div class="dropdown-divider mb-0"></div>
                  <a href="#!" title="Log Out" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">
                    <i class="fi fi-power float-start"></i>
                    Log Out
                  </a>
                </div>
                -->

              </li>

            </ul>
            <!-- /OPTIONS -->



          </nav>

        </div>
        <!-- /NAVBAR -->

      </header>
      <!-- /HEADER -->
