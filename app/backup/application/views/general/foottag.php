
  <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">var plugin_path = '<?php echo base_url();?>assets/plugins/';</script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/customscript.js"></script>
    <!-- <script src='https://code.responsivevoice.org/responsivevoice.js'></script> -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Qt0QdsP5"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/view/pack_hotel.js"></script>
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

