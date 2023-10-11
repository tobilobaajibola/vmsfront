<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>QR DATA</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                               <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">
                                </head>
                                <body className='snippet-body'>
                                <div class="container mt-5 mb-5 d-flex justify-content-center">
			    <div class="card px-1 py-4">
			        <div class="card-body">
			          <h6 class="card-title mb-3 text-center">QR Data</h6>
		      
			        		<table class="table table-striped-columns">
			        				<tr>
			        						<th scope="row">Name</th>
			        						<td><?php echo $qrdata['name'];?></td>
			        				</tr>
			        			<tr>
			        						<td scope="row">Email </th>
			        						<td><?php echo $qrdata['email'];?></td>
			        				</tr>
			        				<tr>
			        						<td scope="row">Mobile </th>
			        						<td><?php echo $qrdata['mobile'];?></td>
			        				</tr>
			        		</table>
			        </div>
			    </div>
			</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                               
                               
                            
                                </body>
                            </html>