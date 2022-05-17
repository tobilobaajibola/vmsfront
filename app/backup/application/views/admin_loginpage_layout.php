<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

	
	<?php
     $this->load->view('general/admin_headtag');
     ?>
     <!-- <body class="smoothscroll enable-animation boxed"> -->
	<body >

    <div id="wrapper" >


<?php

      if (isset($page_layout)){
       $this->view($page_layout);
      }
    ?>
</div>
<script src="<?php echo base_url();?>assets/admin/js/core.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/vendor_bundle.min.js"></script>


</body>
</html>


