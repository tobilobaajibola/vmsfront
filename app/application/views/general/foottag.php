  <script src="<?php echo front_asset();?>assets/js/core.min.js"></script>
  <script src="<?php echo front_asset();?>assets/js/custom.js"></script>
  <script src="<?php echo front_asset();?>assets/js/customscript.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=Qt0QdsP5"></script>
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


 <script type="text/javascript">
      $(document).ready(function($){

        $('[data-load-box]').each(function(){
           
           var load_box = $(this).data('load-box');
           // var limit = $(this).data('top-tour-in-each-category-limit');
           var $this = $(this);

           $.ajax({
             url: '<?php echo base_url()?>boxes/' + load_box,
             type:'get',
             success:function(dt){
               $this.html(dt);
             }

           });

        });


  })

    </script>
