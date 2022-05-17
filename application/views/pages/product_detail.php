<div id="main">
				<div class="section section-bg-10 pt-8 pb-11">
					<div class="container">
						<div class="row display">
							<div class="col-sm-12">
								<h2 class="page-title ">Shop Detail</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-md-push-3">
								<div class="single-product">
									<div class="col-md-6">
										<div class="image-gallery">
											<div class="image-gallery-inner">
												<div>
													<div class="image-thumb">
														<a href="<?php echo base_url();?>assets/images/<?php echo $product_detail['product_category'];?>/single/<?php echo $product_detail['product_image'];?>" data-rel="prettyPhoto[gallery]">
															 <img src="<?php echo base_url();?>assets/images/<?php echo $product_detail['product_category'];?>/single/<?php echo $product_detail['product_image'];?>" alt="" />
														</a>
													</div>
												</div>
												<div>
													<div class="image-thumb">
														<a href="<?php echo base_url();?>assets/images/<?php echo $product_detail['product_category'];?>/single/<?php echo $product_detail['product_image'];?>" data-rel="prettyPhoto[gallery]">
															<img src="<?php echo base_url();?>assets/images/<?php echo $product_detail['product_category'];?>/single/<?php echo $product_detail['product_image'];?>" alt="" />
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="image-gallery-nav">
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="<?php echo base_url();?>assets/images/<?php echo $product_detail['product_category'];?>/single/<?php echo $product_detail['product_image'];?>" alt="" />
												</div>
											</div>
											<!-- <div class="image-nav-item">
												<div class="image-thumb">
													<img src="<?php //echo base_url();?>assets/images/lemonade/thumb/2.jpg" alt="" />
												</div>
											</div> -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="summary">
											<h1 class="product-title"><?php echo $product_detail['product_name'];?></h1>
											<div class="product-price">
												<ins>&#8358;<?php echo $product_detail['product_price'];?> (Within Lagos) Per Pack</ins><br>
												<ins>&#8358;<?php echo $product_detail['product_price']+1500;?> (Outside Lagos) Per Pack</ins>
											</div>
											<div class="mb-3">
												<p>Relish the goodness of hand-picked lemons from our farms. 100% lemon with no added additives or sweetners for a healthy you.</p>
											</div>
											<form class="cart" action="<?php echo base_url();?>cart" method="post">
												<input type="hidden" name="product_name" value="<?php echo $product_detail['product_name'];?>">
												<input type="hidden" name="product_price" value="<?php echo $product_detail['product_price'];?>">
												<input type="hidden" name="product_image" value="<?php echo $product_detail['product_image'];?>">
												<div class="row">
												<div class="col-sm-12">
											<label>Select Location<span class="required">*</span></label>
											<div class="form-wrap">
												<select name="state_option" id="country2">
													<option value="1">Within Lagos</option>
													<option value="2">Outside Lagos</option>
													
												</select>
											</div>
											</div>
										</div>
										<div class="row">
												<div class="col-sm-12">
											<label>Select Quantity<span class="required">*</span></label>
											<div class="form-wrap">
												<select name="quantity" id="country2">
													<option value="1">One Pack</option>
													<option value="2">Two Packs</option>
													<option value="3">Three Packs</option>
													
												</select>
											</div>
											</div>
										</div>
												<!-- <div class="quantity-chooser"> -->
													
													<!-- <div class="quantity"> -->
														<!-- <span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
														<input type="text" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
														<span class="qty-plus" data-max="4"><i class="ion-ios-plus-outline"></i></span> -->
												
													<!-- </div> -->
												<!-- </div> -->
												<button type="submit" class="single-add-to-cart">ADD TO CART</button>
											</form>
											<div class="product-meta">
												<table>
													<tbody>
														<tr>
															<td class="label">Category</td>
															<td class="display"><a href="#">Juice</a></td>
														</tr>
														<tr>
															<td class="label">Share</td>
															<td class="share">
																<a target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-twitter"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="commerce-tabs tabs classic">
											<ul class="nav nav-tabs tabs">
												<li class="active">
													<a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active in" id="tab-description">
													<p>
														<?php echo $product_detail['product_description'];?>
													</p>
												</div>
												
											</div>
										</div>
										
									</div>
									<div class="col-md-12">
										<div class="related">
											<div class="related-title">
												<div class="text-center mb-1 section-pretitle fz-34">Related</div>
												<h2 class="text-center section-title mtn-2 fz-24">Products</h2>
											</div>
											<div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">
												  <?php
                                    foreach ($list_product as $list_products) {
                                        # code...
                                        ?>
                                        <div class="product-item text-center">
                                        <div class="product-thumb">
                                            <?php 
                                                $product_name = str_replace(' ', '-', $list_products['product_name']);
                                                ?>
                                            <a href="<?php echo base_url();?>product/<?php echo $product_name;?>">
                                                <img src="<?php echo base_url();?>assets/images/<?php echo $list_products['product_category'];?>/single/<?php echo $list_products['product_image'];?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="lemonade-150.html">
                                                <h2 class="title"><?php echo $list_products['product_name'];?></h2>
                                                <span class="price">
                                                    <ins>&#8358;<?php echo $list_products['product_price'];?> per pack</ins>
                                                </span>
                                            </a>
                                        </div>
                                    </div> 
                                    <?php
                                    }
                                    ?>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-md-pull-9">
								<div class="sidebar">
									<div class="widget widget-product-search">
										<form class="form-search">
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
									</div>
									  <div class="widget widget-product-categories">
                                        <h3 class="widget-title">Product Categories</h3>
                                        <ul class="product-categories">
                                            <li><a href="<?php echo base_url();?>products/category/lemonade">Old Fashioned</a> <span class="count">Packs</span></li>
                                            <li><a href="<?php echo base_url();?>products/category/icedtea">Icedtea</a> <span class="count">Packs</span></li>
                                            <li><a href="<?php echo base_url();?>products/category/pink">Pink Lemonade</a> <span class="count">Packs</span></li>
                                            <li><a href="<?php echo base_url();?>products/category/mixed">Mixed Lemonade</a> <span class="count">Packs</span></li>
                                        </ul>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>