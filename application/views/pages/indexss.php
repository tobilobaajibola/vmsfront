
   <!-- Header --><!-- Header -->
   <div class="header pb-6">
      <div class="container-fluid">
         <div class="header-body">
            <div class="row align-items-center py-4">
               <div class="col-lg-6 col-7">
                  <h6 class="h2 d-inline-block mb-0">Welcome Back, Zhang</h6>
                  
               </div>
               <div class="col-lg-6 col-5 text-right"><a href="#" class="btn btn-sm btn-neutral">New</a> <a href="#" class="btn btn-sm btn-neutral">Filters</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
     
      <div class="card-deck flex-column flex-xl-row">
        
               <!-- Chart -->
               <div class="card ">
                <div class="card-body">
    <a href="#!"><img src="<?php echo base_url();?>assets/img/theme/team-1.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;"></a>
    <div class="pt-4 text-center">
        <h5 class="h3 title"><small class="h4 font-weight-light text-muted">Balance</small>
          <span class="d-block mb-1">$130,567.89</span> 
          </h5>
  
    </div>
</div>
              
<div class="card-body row">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary">Deposit</button> 
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-primary">Withdraw</button> 
    </div>
</div>
     <div class="card-body">
               <!-- List group -->
               <ul class="list-group list-group-flush list my--3">
                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                      
                        <div class="col-md-6">
                           <h4 class="mb-0">John Michael</h4>
                          
                        </div>
                        <div class="col-md-6 pull-right"><a href="#!">John Michael</a></div>
                     </div>
                  </li>
                 
               </ul>
            </div>
</div>

            
         <div class="card">
            <div class="card-header bg-transparent">
               <div class="row align-items-center">
                  <div class="col">
                     <h6 class="text-uppercase text-muted ls-1 mb-1">History</h6>
                  </div>
               </div>
            </div>
           <div class="card-body">
               <!-- List group -->
               <ul class="list-group list-group-flush list my--3">
                <div data-load-box="list_transaction_histories"></div>
                  
               </ul>
            </div>
         </div>
         <!-- Progress track -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header">
               <div class="row align-items-center">
                  <div class="col-8">
                     <!-- Surtitle -->
                     <h6 class="surtitle">News</h6>
                     <!-- Title -->
                     <h5 class="h3 mb-0">Progress track</h5>
                  </div>
                  <div class="col-4 text-right"><a href="#!" class="btn btn-sm btn-neutral">View All</a></div>
               </div>
            </div>
            <!-- Card body -->
            <div class="card-body">
               <!-- List group -->
               <ul class="list-group list-group-flush list my--3">
                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <a href="#" class="avatar blog-avatar"><img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-1.jpg"></a>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0"><a href="#!">Consectetur sint occaecat cillum non exercitation</a></h4>
                           <span class="text-success">●</span> <small>coinmarketcap.com</small>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <a href="#" class="avatar  blog-avatar"><img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-2.jpg"></a>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0"><a href="#!">Eu occaecat magna anim aliqua tempor</a></h4>
                           <span class="text-warning">●</span> <small>coinmarketcap.com</small>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <a href="#" class="avatar  blog-avatar"><img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-3.jpg"></a>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0"><a href="#!">Nisi elit eu aliqua non</a></h4>
                           <span class="text-danger">●</span> <small>coinmarketcap.com</small>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <a href="#" class="avatar  blog-avatar"><img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-4.jpg"></a>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0"><a href="#!">Et adipisicing consectetur pariatur duis</a></h4>
                           <span class="text-success">●</span> <small>coinmarketcap.com</small>
                        </div>
                     </div>
                  </li>

                  <li class="list-group-item px-0">
                     <div class="row align-items-center">
                        <div class="col-auto">
                           <!-- Avatar --> <a href="#" class="avatar  blog-avatar"><img alt="Image placeholder" src="<?php echo base_url();?>assets/img/theme/team-4.jpg"></a>
                        </div>
                        <div class="col ml--2">
                           <h4 class="mb-0"><a href="#!">Elit nostrud reprehenderit excepteur elit sint</a></h4>
                           <span class="text-success">●</span> <small>coinmarketcap.com</small>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
     

     
    <?php   $this->load->view('box/suggest_feature'); ?>
    <?php  //$this->load->view('box/change_password'); ?>
    <?php   //$this->load->view('box/settings'); ?>
    <?php   //$this->load->view('box/deposit'); ?>
    <?php  //$this->load->view('box/withdraw'); ?>
    <?php   //$this->load->view('box/plan_details'); ?>
  