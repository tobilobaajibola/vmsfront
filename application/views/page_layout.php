<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('general/headtag');   ?>
<body class="header-scroll-reveal">
	<div id="wrapper"> 
	<?php 
	$this->load->view('general/header');
	?>
		<!-- #middle = ajax main container -->
	<div id="middle">
		<?php
      		if (isset($page_layout)){
       		$this->view($page_layout);
      	}
      	?>
      </div>
      <?php
       $this->load->view('general/footer');
	
	?>
		</div>
       <?php

        $this->load->view('general/foottag');
      
 
?>

</body>
</html>


