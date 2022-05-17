   
    <!-- use this instead, for non-ajax -->
    <!-- <form novalidate class="bs-validate" action="#" method="post"> -->



            <form  class="bs-validate js-aja" id="add_visitor_tag"   onsubmit="form_submitter('#add_visitor_tag', '<?php echo base_url();?>admin/visitors/add_visitor_tags' ); return false">
       <!-- 

            hidden action, 
            used by backend as identifier 

        -->
       
        <!-- Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelMd">
                <i class="fi fi-envelope-2 text-muted"></i>
                <span class="d-inline-block pl-2 pr-2">
                   Add New Visitor tag
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
          
            <!-- Message : Subject -->
            <div class="form-label-group mb-3 mt-3">
                <input  placeholder="Tag Number" type="text" value=" " name="tag_no"  class="form-control" readonly>
                <label for="title">Visitor Tag Number</label>
            </div>
            <div  class="form-label-group mb-3 mt-3">
                 <select required name="message_to[]" class="form-control bs-select hide" title="Send to..." data-header="Select one or more">
                <option value="1" data-icon="fi fi-user-male float-start">Michael Dam</option>
                <option value="2" data-icon="fi fi-user-male float-start">Joseph Gonzalez</option>
                <option data-divider="true"></option>
                <option value="5" data-subtext="(owner)" data-icon="fi fi-star-full float-start text-warning">John Doe</option>
            </select>
                <label for="title">Release tag to</label>
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

    </form>