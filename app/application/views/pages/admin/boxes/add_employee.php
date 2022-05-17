   
    <!-- use this instead, for non-ajax -->
    <!-- <form novalidate class="bs-validate" action="#" method="post"> -->

    <!-- <form class="bs-validate js-ajax" novalidate 
            method="post" 
            action="<?php //echo base_url();?>admin/employees/add_employees" 
            method="post" 

            data-modal-autoclose-on-success="false"
            data-modal-autoclose-on-success-delay="false"

            data-ajax-update-url="false" 
            data-ajax-show-loading-icon="true" 

            data-success-toast-text="<i class='fi fi-check float-start'></i> Successfully Sent!" 
            data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Please, complete all required fields!" 
            data-error-toast-delay="3000" 
            data-error-toast-position="bottom-center" 
            data-error-scroll-ignore="true"

            data-ajax-callback-function=""> -->

      <form id="addhost"  onsubmit="form_submitter('#addhost', '<?php echo base_url();?>admin/employees/add_employees' ); return false">

        <!-- 

            hidden action, 
            used by backend as identifier 

        -->
        <input type="hidden" name="action" value="send_message">



        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelMd">
                <i class="fi fi-envelope-2 text-muted"></i>
                <span class="d-inline-block pl-2 pr-2">
                    Add new Host
                </span>
            </h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fi fi-close fs--18" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Content -->
        <div class="modal-body p--10">
              <div id="alert_success" class="alert alert-success mb-30  mt-4" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div><!-- /Alert Success -->
            <!-- Alert Failed -->
            <div id="alert_fail" class="alert alert-danger mb-30 mt-4" style="display: none;" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
            <!--
                Message : To

                please pay attention to:  message_to[]
                is array because multiple selection is enabled.
                remove [] (brackets) if multiple is not enabled!
            -->
          <!--   <select required name="message_to[]" multiple class="form-control bs-select hide" title="Send to..." data-header="Select one or more" data-live-search="true" data-actions-box="true">
                <option value="1" data-icon="fi fi-user-male float-start">Michael Dam</option>
                <option value="2" data-icon="fi fi-user-male float-start">Joseph Gonzalez</option>
                <option value="3" data-icon="fi fi-user-male float-start">Erik Mclean</option>
                <option value="4" data-icon="fi fi-user-female float-start">Felicia doe</option>
                <option data-divider="true"></option>
                <option value="5" data-subtext="(owner)" data-icon="fi fi-star-full float-start text-warning">John Doe</option>
            </select>
 -->

            <!-- Message : Subject -->
            <div class="form-label-group mb-3 mt-3">
                <input  placeholder="First name" type="text" value="" name="firstname"  class="form-control" required="">
                <label for="title">First Name</label>
            </div>

              <div class="form-label-group mb-3 mt-3">
                <input  placeholder="last name" type="text" value="" name="lastname" class="form-control" required="">
                <label for="title">Last Name</label>
            </div>

              <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Email" type="email" value="" name="email" class="form-control" required="">
                <label for="title">Email</label>
            </div>
             <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Phone number" type="number" value="" name="phone" class="form-control" required="">
                <label for="title">Phone Number</label>
            </div>
            <div class="row">

        <div class="form-label col-md-12 admin-search-box">
            <select required name="location_id"  class="form-control bs-select hide" title="Location/Branch" data-header="Location/Branch" data-live-search="true" data-actions-box="true">
                    <?php
                     foreach ($list_location as $list_locations) {
                        ?>
                   <option value="<?php echo $list_locations['location_id'];?>" data-icon="fi fi-user float-start"><?php echo $list_locations['location_name'];?></option>';    
                <?php
                }
                ?>
                
            </select>
        </div>

    </div>
            <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Department" type="text" value="" name="department" class="form-control" required="">
                <label for="title">Department</label>
            </div>
             <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Staff Extension" type="text" value="" name="extention" class="form-control" >
                <label for="title">Extension</label>
            </div>



        </div>

        <!-- Footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-pill btn-primary btn-soft">
                <i class="fi fi-check"></i> 
                Add Employee
            </button>
            <button type="button" class="btn btn-sm btn-pill btn-light" data-dismiss="modal">
                <i class="fi fi-close"></i> 
                Cancel
            </button>
        </div>

    </form>