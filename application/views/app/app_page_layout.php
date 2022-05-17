<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('general/headtag');   ?>
	<body class="header-sticky header-over">
	<div id="wrapper"> 
	<?php 
	// $this->load->view('app/appgeneral/header');
	?>
		<!-- #middle = ajax main container -->
	<div id="middle">
		<?php
      		if (isset($app_page_layout)){
       		$this->view($app_page_layout);
      	}
      	?>
      </div>
      <?php
  
	
	?>
		</div>
       <?php

        $this->load->view('general/foottag');
      
 
?>
    <script src="<?php echo base_url();?>assets/js/html5-qrcode.min.js"></script>

<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                console.log(`Scan result ${decodedText}`, decodedResult);
                // alert(`Scan result ${decodedText}`, decodedResult);
                 $("#loadingoverlay").fadeIn(300);　
                window.location.replace(`${decodedText}`, decodedResult);
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
</body>
</html>


