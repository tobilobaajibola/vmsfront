         <!-- PAGE TITLE -->
         

            <section class="p-0 jarallax overlay-dark overlay-opacity-7 text-white bg-cover" style="background-image:url(<?php echo base_url();?>assets/images/product/<?php echo $product_category_details['category_image'];?>)">

            <div class="container"> 

               <div class="d-middle justify-content-start col-12 col-md-8 min-h-50vh text-center-xs">

                  <div class="mt-7overflow-hidden mb-4">

                     <h1 class="h2-xs font-weight-light mb-0">
                        About our <span class="text-warning font-weight-medium"><?php echo $product_category_details['name'];?></span> 
                     </h1>
                     
                     <p class="h1 h4-xs font-weight-medium mb-4">
                        Why you should choose us
                     </p>

                     <p class="lead">
                        <?php echo strtolower($product_category_details['description']);?>

                  </div>

               </div>

            </div>
         </section>
         <!-- /PAGE TITLE -->


         <!-- -->
         <section class="pt-5">
            <div class="container">

               <div class="row">

                  <!-- sidebar -->
                  <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb--60 ">


                     <!-- CATEGORIES -->
                     <nav class="nav-deep nav-deep-light mb-4 bg-white shadow-xs shadow-none-md shadow-none-xs px-4 pb-3 p-0-md p-0-xs rounded">

                        <!-- mobile trigger : categories -->
                        <button class="clearfix btn btn-toggle btn-sm btn-block text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-target="#nav_responsive" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                           <span class="group-icon px-2 py-2 float-start">
                              <i class="fi fi-bars-2"></i>
                              <i class="fi fi-close"></i>
                           </span>

                           <span class="h5 py-2 m-0 float-start">
                              Categories
                           </span>
                        </button>

                        <!-- desktop only -->
                        <h5 class="h6 pt-3 pb-3 m-0 d-none d-lg-block">
                           Categories
                        </h5>


                        <!-- navigation -->
                        <ul id="nav_responsive" class="nav flex-column d-none d-lg-block">

                           <?php
                           foreach ($list_product_category as $list_product_categories) {
                             ?>
                           <li class="nav-item">
                              <a class="nav-link px-0" href="<?php echo base_url();?>products/category/<?php echo $list_product_categories['slug_url'];?>">
                                 <!-- <?php 
                                // $date_difference = date ("Y-m-d") - $list_product_categories['date_added'];
                                // echo $date_difference;
                                ?>
                                 <span class="badge badge-warning float-end pl--3 pr--3 pt--2 pb--2 fs--11 mt-1">
                                    New in stock
                                 </span> -->

                                 <i class="fi fi-arrow-end m-0 fs--12"></i> 
                                 <span class="px-2 d-inline-block">
                                    <?php echo $list_product_categories['name'];?>
                                 </span>
                              </a>
                           </li>
                           <?php
                           }
                           ?>

                        </ul>

                     </nav>
                     <!-- /CATEGORIES -->



                     <!-- mobile trigger : filters -->
                     <!-- <button class="clearfix btn btn-toggle btn-sm btn-block text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-target="#sidebar_filters" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3 fullscreen" data-toggle-body-class="overflow-hidden">
                        <i class="px-2 py-2 fs--15 float-start fi fi-eq-horizontal"></i>
                        <span class="h5 py-2 m-0 float-start">
                           Filters
                        </span>
                     </button>
 -->

                     <form method="get" id="sidebar_filters" class="d-none d-lg-block">

                        <!-- MOBILE ONLY -->
                     <!--    <div class="bg-white pb-3 mb-4 d-block d-lg-none border-bottom">
                           
                           
                           <i class="fi fi-eq-horizontal float-start"></i>
                           <span class="h5 m-0 d-inline-block">
                              Filters
                           </span>
 -->
                           <!-- mobile : exit fullscreen -->
                          <!--  <a href="#" class="float-end btn-toggle text-dark mx-1" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3 fullscreen" data-toggle-body-class="overflow-hidden" data-target="#sidebar_filters">
                              <i class="fi fi-close"></i>
                           </a>

                        </div> -->
                        <!-- /MOBILE ONLY -->





                      


                        <!-- Brands -->
              <!--           <div class="card rounded b-0 shadow-xs d-block mb-4 p-3">

                           <div class="input-group-over">
                              <input type="text" class="form-control form-control-sm iqs-input" data-container=".iqs-container" value="" placeholder="quick filter">
                              <span class="fi fi-search btn btn-sm pl--12 pr--12 text-gray-500"></span>
                           </div>

                           <div class="iqs-container mt-3 scrollable-horizontal scrollable-styled-light max-h-250">

                              <div class="iqs-item">

                                 <label class="form-checkbox form-checkbox-primary">
                                    <input type="checkbox" name="brand[]" value="1">
                                    <i></i> Nike <span class="text-muted fs--12 d-inline-block">(11)</span>
                                 </label>

                              </div>


                             
                           </div>

                        </div> -->
                        <!-- /Brands -->


                        <!-- optional button -->
                       <!--  <button type="submit" class="btn btn-primary btn-soft btn-sm btn-block">
                           Apply Filters
                        </button> -->

                     </form>
                     <!-- advert box -->
                   <?php $this->load->view('box/advert');?>
                     <!-- /advert box -->


                  </div>
                  <!-- /sidebar -->



                  <!-- products -->
                  <div class="col-12 col-sm-12 col-md-12 col-lg-9">


                     <!-- additional filters -->
                   <!--   <div class="shadow-xs bg-white mb-1 p-3 rounded clearfix">

                        <h2 class="h6 mb-0">
                           <?php echo $product_category_details['name'];?>
                        </h2>

                     </div> -->
                     <!-- /additional filters -->

                           <div class="row gutters-xs--xs">
                             <?php $this->load->view('box/list_product');?>
                          </div>

                     <!-- product list -->
                     <!-- <div class="row gutters-xs--xs" data-load-box="list_products/<?php echo $product_category;?>"  onload=".trigger('.js-ajax-modal')"></div> -->
                     <!-- /product list -->


                    

                  </div>
                  <!-- /products -->

               </div>

            </div>
         </section>
         <!-- / -->
