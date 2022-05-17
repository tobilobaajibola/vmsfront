   
    <!-- use this instead, for non-ajax -->
    <!-- <form novalidate class="bs-validate" action="#" method="post"> -->



            <form  class="bs-validate js-aja" id="edit_employee"   onsubmit="form_submitter('#edit_employee', '<?php echo base_url();?>admin/employees/edit_employees' ); return false">
        <!-- onsubmit="form_submitter('#change_password', '<?php //echo base_url();?>admin/accounts/change_passwords' ); return false" -->

        <!-- 

            hidden action, 
            used by backend as identifier 

        -->
        <input type="hidden" name="action" value="send_message"/>
            <input type="hidden" name="employee_id" value="<?php echo $employee_detail['id'];?>" />


        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelMd">
                <i class="fi fi-envelope-2 text-muted"></i>
                <span class="d-inline-block pl-2 pr-2">
                    Edit Employee
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
           <!--  <select required name="message_to[]"  class="form-control bs-select hide" title="Send to..." data-header="Select one or more" data-live-search="true" data-actions-box="true">
                <option value="1" data-icon="fi fi-user-male float-start">Michael Dam</option>
                <option value="2" data-icon="fi fi-user-male float-start">Joseph Gonzalez</option>
                <option value="3" data-icon="fi fi-user-male float-start">Erik Mclean</option>
                <option value="4" data-icon="fi fi-user-female float-start">Felicia doe</option>
                <option data-divider="true"></option>
                <option value="5" data-subtext="(owner)" data-icon="fi fi-star-full float-start text-warning">John Doe</option>
            </select> -->

        <div class="hide_after_submit">

            <!-- Message : Subject -->
            <div class="form-label-group mb-3 mt-3">
                <input  placeholder="First name" type="text" value="<?php echo $employee_detail['firstname'];?>" name="firstname"  class="form-control" required>
                <label for="title">First Name</label>
            </div>

              <div class="form-label-group mb-3 mt-3">
                <input  placeholder="last name" type="text" value="<?php echo $employee_detail['lastname'];?>" name="lastname" class="form-control" required>
                <label for="title">Last Name</label>
            </div>

              <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Email" type="email" value="<?php echo $employee_detail['email'];?>" name="email" class="form-control" required>
                <label for="title">Email</label>
            </div>
             <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Phone number" type="phone" value="<?php echo $employee_detail['phone'];?>" name="phone" class="form-control" required>
                <label for="title">Phone Number</label>
            </div>
             <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Staff Extension" type="number" value="<?php echo $employee_detail['employee_ext'];?>" name="extention" class="form-control">
                <label for="title">Extension</label>
            </div>
             <div class="form-label-group mb-3 mt-3">
                <select class="form-control" name="status">
                    <option value="<?php echo $employee_detail['status'];?>"><?php if($employee_detail['status']==0){ echo 'Active';} else{echo 'Inactive';}?></option>
                    <option value="0">Enable</option>
                    <option value="1">Disable</option>
                </select>
                <label for="title">Enable/Disable</label>
            </div>
</div>


        </div>

        <!-- Footer -->
        <div class="modal-footer">
        <div class="hide_after_submit">
            <button type="submit" class="btn btn-sm btn-pill btn-primary btn-soft">
                <i class="fi fi-check"></i> 
                Submit
            </button>
        </div>
            <button type="button" class="btn btn-sm btn-pill btn-light" data-dismiss="modal">
                <i class="fi fi-close"></i> 
                Cancel
            </button>
        </div>

    </form>