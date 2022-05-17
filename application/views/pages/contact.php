    <!-- PAGE TITLE -->
                <section class="bg-theme-color-light"> 

                    <!-- svg shape -->
                    <svg class="position-absolute top-0 start-0 end-0" viewBox="0 480.469 1000 39.062">
                        <polygon fill="#FFFFFF" points="0,519.531 0,480.469 1000,480.469 "></polygon>
                    </svg>
                    
                    <div class="container d-middle"> 

                        <div class="pt-6">

                            <h1 class="h2-xs mb-1">
                                Skorebot
                            </h1>

                            <p class="lead mb-5">
                                How can we help?
                            </p>

                        </div>

                    </div>

                    <!-- down arrow -->
                    <i class="arrow arrow-lg arrow-bottom arrow-center border-theme-color-light"></i>

                </section>  
                <!-- /PAGE TITLE -->


                <!-- CONTACT -->
                <section>
                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-lg-8 mb-3">

                                <div class="bg-white shadow-primary-xs rounded p-2 mb-5">

                                    <!--
                                        Map
                                    -->
                                    <div class="map-leaflet h--450 w-100 rounded" 
                                        data-map-tile="voyager" 
                                        data-map-zoom="8" 
                                        data-map-json='[
                                            { 
                                                "map_lat": 40.750765,
                                                "map_long": -73.993428,
                                                "map_popup": "<b>Skorebot.</b> <br>No9, Rabat Street,<br> Beechwood Park / Lagos <br> <a href=`tel:7853889450`>(01)-785-388-9450</a>"
                                            },
                                            { 
                                                "map_lat": 40.750765,
                                                "map_long": -73.093428,
                                                "map_popup": "Skorebot."
                                            }
                                        ]'><!-- map container--></div>

                                </div>

                            </div>


                            <div class="col-12 col-lg-4 mb-3">

                                <div class="p-4">

                                    <div class="d-flex">

                                        <div class="w--40">
                                            <i class="fi fi-shape-abstract-dots text-gray-500 float-start fs--20"></i> 
                                        </div>

                                        <div>
                                            <h2 class="fs--25 font-weight-light">
                                                Skorebot.
                                            </h2>
                                            <ul class="list-unstyled m-0 fs--15"> 
                                                <li class="list-item text-muted">VAT: 0123456</li> 
                                                <li class="list-item text-muted">BANK: GE29 NB0 000 0001 0190 4917</li> 
                                                <li class="list-item text-muted">Georgia Bank</li> 
                                                <li class="mt--15 list-item text-muted">Road 741, No.44, New York / United States</li>
                                            </ul>
                                        </div>

                                    </div>



                                    <div class="d-flex mt-4">

                                        <div class="w--40">
                                            <i class="fi fi-time text-gray-500 float-start fs--20"></i> 
                                        </div>

                                        <div>
                                            <h3 class="h4 font-weight-normal"> 
                                                Working Hours
                                            </h3>
                                            <ul class="list-unstyled m-0 fs--15">
                                                <li class="list-item text-muted">Monday &ndash; Friday: 09:00 – 18:00</li>
                                                <li class="list-item text-muted">Sunday: 09:00 – 12:00</li>
                                            </ul>
                                        </div>

                                    </div>




                                    <div class="d-flex mt-4">

                                        <div class="w--40">
                                            <i class="fi fi-phone text-gray-500 float-start fs--20"></i> 
                                        </div>

                                        <div>
                                            <h3 class="h4 font-weight-normal"> 
                                                Phone Number
                                            </h3>
                                            <ul class="list-unstyled m-0">
                                                <li class="list-item mb-2 text-gray-500">
                                                    <a class="link-muted" href="tel:7853889450">785-388-9450</a>
                                                </li>
                                                <li class="list-item mb-2 text-gray-500">
                                                    <a class="link-muted" href="tel:3162881850">316-288-1850</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </section>
                <!-- /CONTACT -->



                <!-- CONTACT FORM -->
                <section class="bg-light">
                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-lg-8 mb-4">

                                <h2 class="font-weight-light mb-5">
                                    Tell us about your dream
                                </h2>


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
                                        
                                        1. unexpected error:        if server response is this string: {:err:unexpected:}
                                        2. mising mandatory:        if server response is this string: {:err:required:}
                                        3. success:                 if server response is this string: {:success:}
                                        
                                        data-ajax-control-alerts="true"
                                        data-ajax-control-alert-succes="#contactSuccess" 
                                        data-ajax-control-alert-unexpected="#contactErrorUnexpected" 
                                        data-ajax-control-alert-mandaroty="#contactErrorMandatory" 

                                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                        WORKING CONTACT! Edit your php/config.inc.php
                                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                -->
                                <form  id="contact_form"   onsubmit="form_submitter('#contact_form', '<?php echo base_url();?>pages/contact_forms' );return false">


                                    <!-- 1. 
                                        optional, hidden action for your backend

                                        PHP Basic Example
                                        if($_POST['action'] == 'contact_form_submit') {
                                            ... send message
                                        }
                                    -->
                                    <input type="hidden" name="action" value="contact_form_submit" tabindex="-1"> 
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
                                        <input required placeholder="Name" id="contact_name" name="contact_name" type="text" class="form-control">
                                        <label for="contact_name">Name</label>
                                    </div>

                                    <div class="form-label-group mb-3">
                                        <input required placeholder="Email" id="contact_email" name="contact_email" type="email" class="form-control">
                                        <label for="contact_email">Email</label>
                                    </div>

                                    <div class="form-label-group mb-3">
                                        <input required placeholder="Phone" id="contact_phone" name="contact_phone" type="text" class="form-control">
                                        <label for="contact_phone">Phone</label>
                                    </div>

                                    <div class="form-label-group mb-4">
                                        <textarea required placeholder="Message" id="contact_message" name="contact_message" class="form-control" rows="3"></textarea>
                                        <label for="contact_message">Message</label>
                                    </div>

                                    <!-- GDPR CONSENT -->
                                    <div class="clearfix bg-white position-relative rounded p-4 mb-4">

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
                                    <div id="alert_success" class="alert alert-success mb-30" style="display: none;">
                                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        </div><!-- /Alert Success -->
                                        <!-- Alert Failed -->
                                        <div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
                                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     </div>



                                    <button type="submit" class="btn btn-primary btn-block">
                                        Send Message
                                    </button>

                                </form>
                                <!-- /CONTACT FORM : AJAX -->


                            </div>

                            <div class="col-12 col-lg-4 mb-4"><!-- empty, optional --></div>

                        </div>

                    </div>
                </section>
