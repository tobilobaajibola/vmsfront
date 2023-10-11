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
                                <body className='snippet-body'>

                                <div class="container mt-5 mb-5 d-flex justify-content-center">
	    <div class="card px-1 py-4">
	        <div class="card-body">
		            <h6 class="card-title mb-3 text-center">Generate QR and scan QR</h6>
		            <div class="d-flex flex-row">
		            	<div class="row">
		            		<div class="col-sm-12">
		             				<a href="<?php base_url();?>qrscan"><button class="btn btn-info btn-block confirm-button" type="submit">Scan QR Here</button></a>
		            		</div>
		            	</div>
		            </div>
<?php 
		            	if($this->input->get('name')){

		            	 ?>
							
						<img src="<?php echo $urlRelativeFilePath;?>" style="width:100%; height:auto; border-radius:60px; padding:20px"/>
		             				<a href="<?php echo $urlRelativeFilePath;?>" download="Qrdata"><button class="btn btn-primary btn-block confirm-button" type="submit">Download QR</button></a>

						<?php 
		            	}
		            	else{
		            	?>
		            <h6 class="information mt-4">Please provide following information</h6>
	        		<form action="qrgenerate" method="GET">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="form-group">
		                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Name" name="name" required> </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="form-group">
		                        <div class="input-group"> <input class="form-control" type="number" placeholder="Mobile" name="mobile" required> </div>
		                    </div>
		                </div>
		            </div>
		            <div class="row mb-3">
		                <div class="col-sm-12">
		                    <div class="form-group">
		                        <div class="input-group"> <input class="form-control" type="email" name="email" placeholder="Email ID" required> </div>
		                    </div>
		                </div>
		            </div>
		            <button class="btn btn-primary btn-block confirm-button" type="submit">Generate QR CODE</button>
	            	</form>
	            	<?php
	            }
	            ?>
	        </div>
	    </div>
	</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>