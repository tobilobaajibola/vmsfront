<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                               <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">
                               
                                </head>
 <!-- <body class="smoothscroll enable-animation boxed"> -->
 <body className='snippet-body'>

                                <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                                    <a href="<?php base_url();?>" class="text-center">Generate QR Here</a>

                               <h2 class="fs-30 fw-400 text-center mb-0">SCAN the QRCODE</h2>
                               
                                <hr>
                          
                                <div class="block">

     
                                    <div>
                                    <div id="qr-reader" ></div>
                                    <div id="qr-reader-results"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
               
                <script src="<?php echo base_url();?>assets/html5-qrcode.min.js"></script>
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