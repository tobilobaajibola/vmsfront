<!DOCTYPE html>
<html lang="en">

	
	<?php
     $this->load->view('general/headtag');
     ?>
     <!-- <body class="smoothscroll enable-animation boxed"> -->
	<body class="smoothscroll enable-animation">
		     <?php
        $this->load->view('general/header');

	?>

  <!-- wrapper -->
		<div id="wrapper">

			<!-- MENU BUTTON -->
			<button id="menu_overlay_open" data-effect="st-effect-11" class="custom-button specialBtn specialBtn-Burger specialBtn-left">
				<i></i>
			</button>

			<!-- BOOK ONLINE BUTTON -->
			<!-- <a class="specialBtn specialBtn-booking specialBtn-right" id="loadpagebtn">
				<span>
					<i class="fa fa-calendar left"></i> VISITOR CHECK IN 
					<small>Checkin in here</small> 
				</span>
			</a> -->

<!-- <a class="btn btn-default btn-lg lightbox specialBtn specialBtn-booking specialBtn-right" href="component/checkin" data-lightbox="iframe" data-plugin-options='{"type":"ajax", "closeOnBgClick":true}'>
	<span> <i class="fa fa-calendar left"></i> VISITOR CHECK IN </span></a
> -->
<div id="pagecontent">
<?php 
    //side bar function
      if (isset($page_layout)){
       $this->view($page_layout);
      }
    ?>
</div>
<!-- loading screen during submission -->
<div id="loadingoverlay">
	<div class="cv-spinner">
		<span class="spinner"></span>
	</div>
</div>
<?php

       // $this->load->view('general/footer');
        $this->load->view('general/foottag');
      
 
?>

</body>
</html>


