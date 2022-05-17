
      <!-- modal header not used -->

      <button type="button" class="close cursor-pointer z-index-10 w--30 h--30 position-absolute top-0 end-0 my-2 mx-3" data-dismiss="modal" aria-label="Close">
         <span class="fi fi-close fs--25 position-absolute end-0 top-0" aria-hidden="true"></span>
      </button>


      <div class="modal-body p-0 m-5 m-4-xs">
               <h5 class="text-center pb-3">YOU ARE WELCOME BACK</h5>

      <div class="accordion" id="accordionAccount">
         <div id="alert_success" class="alert alert-success mb-30" style="display: none;">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><!-- /Alert Success -->
            <!-- Alert Failed -->
            <div id="alert_fail" class="alert alert-danger mb-30" style="display: none;" >
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         </div>
      <div id="show_after_submit"></div>
    
            
    

            <!-- SIGN UP -->
            <!-- <form class="collapse bs-validate" novalidate method="post" action="#" id="accordionAccountSignUp" data-parent="#accordionAccount"> -->
               <form class="collapse bs-validate hide_after_submit  show" novalidate id="checkinappointment" autocomplete="off"  data-parent="#accordionAccount" autocomplete="off">
					<input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
               <div class="row">
              
               <div class="col-md-12">
                <div class="form-label-group mb-3">
                  <input required id="appointment_code" type="text" class="form-control" name="appointment_code" value="" placeholder="Company Phone"  required>
                  <label for="phone_number">Appointment</label>
               </div>
           </div>
 
     
               <div class="col-md-12">
               <!-- GDPR CONSENT -->
              	   <label class="form-checkbox form-checkbox-primary m-0">
                     <input required type="checkbox" name="checkbox">
                     <i></i> 
                     <span class="fs--12">   
                        I consent that my data is being stored in 
                        line with the guidelines set out in  
                        <a href="#privacyaccordion" aata-toggle="collapse" aria-expanded="true"  aria-controls="login_user">Privacy Policy</a>. 
                     </span>
                  </label>
              </div>
              </div>											
			
               <div class="row"> 
               	<div class="col-md-12">   
               		<button type="submit" class="btn btn-primary btn-soft btn-block">Check in  </button>
               	</div>
               </div>
               <!-- /GDPR CONSENT -->

       

             <!--   <div class="text-center mt-5">
                  <a href="#login_user" class="d-block text-muted text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
                     Back to Sign In
                  </a>
               </div> -->

            </form>
			<div id="visitortag"></div>

            <!-- /SIGN UP -->
   <div class="collapse bs-validate"  id="captureaccordion" data-parent="#accordionAccount">

               <!-- <h5 class="text-center pb-3">capture</h5> -->
               <div class="row ">
               	<div class="col-md-12">
             	<div id="cature-controls">
				<div class="row">
					<div class="col-md-9">
					      <video id="capture-show"  style=" max-width: 440px; border-radius: 10px;" autoplay></video>
					  </div>
					<div class="col-md-3">
					<div id="overlay">
						<div id="overlaytext">
			     			 <!-- <input  type="button" value="Take Photo"  /> -->
			     			 <h2 id="capture-take" class="m-30" >
			     			 	<a href="#!" class="btn btn-warning btn-block  transition-hover-top mb-3 p-5 d-block-xs">
									<i class="fi fi-support fs--45 "></i>
										<h3 class="fs--20">CAPTURE</h3>
								</a>
							</h2>
						</div>
					</div>
					
				</div>
					
			    </div>
			      <div id="capture-canvas"></div>
			   </div>

               <!-- back -->
              <!--  <div class="text-center mt-5">
                  <a href="#checkinvisitor" class="d-block text-success text-decoration-none" data-toggle="collapse" aria-expanded="true" aria-controls="login_user">
                     Nevermind, back to Sign In
                  </a>
               </div> -->
           </div>
           </div>
            </div>
   <div class="collapse bs-validate"   id="privacyaccordion" data-parent="#accordionAccount">
   		<div class="article-format">
<p>By visiting https://www.vistacks.com, you accept our privacy and cookie policy.</p>


<p>We take your  concerns on privacy very importantly, Hence we  have set out our  privacy policy to let you know how Vistacks use and protect any information you provide while using this website. Vistacks is committed to ensuring that your privacy is protected.</p>


<p>Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. Vistacks may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.</p>


<p>What we collect</p>
We may collect the following information:<br/>
<ul>
	<li>Name</li>
	<li>Contact information including email address and phone numbers</li>
	<li>Other information relevant to customer surveys and/or offers</li>
</ul>


<p>What we do with the information we collect?</p>
<p>We require this information to understand your needs and provide you with a better service, Kyc  and in particular for the following reasons:</p>
<ul>
<li>Internal record keeping.</li>
<li>For delivery purposes.</li>
<li>We may use the information to improve our products and services.</li>
<li>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
<li>From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website according to your interests.</li>
</ul>


<h2>Security</h2>
We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.


<h2>How we use cookies</h2>
<p>A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>
<p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about web page traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
<p>Overall, cookies help us provide vistacks website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us. You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>


<h2>Links to other websites</h2>
<p>Our website may contain links to other websites of interest or partner service providers. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>


<h2>Personal information</h2>
<p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</p>

</div>
   </div>
         </div>

      </div>

      <div class="border-top text-muted fs--13 bg-light rounded-bottom p-3">
         <b>Privacy:</b> All data is secure, never transfered to a third party provider/service.
      </div>


