   
    <!-- use this instead, for non-ajax -->
    <!-- <form novalidate class="bs-validate" action="#" method="post"> -->



       
       <form id="book_appointment" onsubmit="form_submitter('#book_appointment', '<?php echo base_url();?>api/addappointment' ); return false">
        <input type="hidden" name="location_id" value="<?php echo $_SESSION['admin_account']['location_id'];?>">
          <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelMd">
                <i class="fi fi-envelope-2 text-muted"></i>
                <span class="d-inline-block pl-2 pr-2">
                   Add Appointment
                </span>
            </h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fi fi-close fs--18" aria-hidden="true"></span>
            </button>
        </div>
 <div id="alert_success" class="alert alert-success mb-30  mt-4" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div><!-- /Alert Success -->
                <!-- Alert Failed -->
                <div id="alert_fail" class="alert alert-danger mb-30 mt-4" style="display: none;" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
        <!-- Content -->
        <div class="hide_after_submit">
        <div class="modal-body p--10">
     

        <div class="row">
        <div class="form-group col-md-6">
            <label class="form-control-label">First Name</label>
            <input type="text" name="first_name" value="" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label class="form-control-label">Last Name</label>
            <input type="text" name="last_name"  value="" class="form-control">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label class="form-control-label">Mobile Number</label>
            <input type="text" name="phone_number" value="" placeholder="xxx-xx-xx" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label class="form-control-label">Email</label>
            <input type="email" name="email"  value="" placeholder="Email" class="form-control">
        </div>
    </div>
        
        <div class="row">
        <div class="form-group col-md-6">
            <label class="form-control-label">Expected Date</label>
            <input class="form-control datepicker" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false" type="text" name="expected_date" value="" placeholder="Expected date" class="form-control">
        </div>
        <div class="form-group col-md-6 ">
            <label class="form-control-label">Expected Time</label>
            <input type="text" class="form-control timepicker" value="11 : 55 : PM" name="expected_time" placeholder="Expected Time" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="form-control-label">Purpose</label>
                <div class="fancy-form fancy-form-select">
                        <select class="form-control" name="purpose">
                            <option value="">Select purpose for Visit</option>
                            <option value="Official">Official</option>
                            <option value="Interview">Interview</option>
                            <option value="Personal">Personal</option>
                        </select>
                        <i class="fancy-arrow"></i>
                    </div>
        </div>
        <div class="form-group col-md-6">
            <label class="form-control-label">Organization</label>
            <input type="text" name="organization" value="" placeholder="Email" class="form-control">
        </div>
    </div>
    <div class="row">

        <div class="form-group col-md-12 admin-search-box">
            <label class="form-control-label">Host employee</label>
            <!--  <input type="text" autocomplete="off" name="employeename"  class="form-control" />
                        <div class="result_input"></div>
                        <div class="result"></div> -->
                 <select required name="employeename"  class="form-control bs-select hide" title="Send to..." data-header="Select host" data-live-search="true" data-actions-box="true">
                    <?php
                     foreach ($list_employee as $list_employees) {
                    echo '<option value="'.$list_employees['firstname'].' '.  $list_employees['lastname'].'" data-icon="fi fi-user float-start">'. $list_employees['firstname'].' '.  $list_employees['lastname'] .'</option>';    
                }
                ?>
                
            </select>
        </div>

    </div>
    <div class="row">
    <div class="form-group col-md-12">
        <label class="form-control-label">Comment/Message</label>
        <textarea class="form-control" name="message" rows="3" value="" placeholder="Message"></textarea>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-12">
        <label class="switch switch switch-round">
            <input type="checkbox" name="sendinvite" value="1" checked="">
            <span class="switch-label" data-on="YES" data-off="NO"></span>
            <span> Send Invite to Visitor?</span>
        </label>
    </div>
    </div>
       
        </div>
        <!-- Footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-pill btn-primary btn-soft">
                <i class="fi fi-check"></i> 
                Submit
            </button>
            <button type="button" class="btn btn-sm btn-pill btn-light" data-dismiss="modal">
                <i class="fi fi-close"></i> 
                Cancel
            </button>
        </div>
    </div>

    </form>