<head>
    <title>Vistacks</title>
    <meta name="description" content="Redefining visitor's interaction with front desk!">
    <meta name="Author" content="Tobiloba Ajibola" />

        <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- up to 10% speed up for external res -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <!-- preloading icon font is helping to speed up a little bit -->
        <link rel="preload" href="<?php echo base_url();?>assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/core.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor_bundle.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

    <!-- favicon -->
    <!-- <link rel="shortcut icon" href="<?php //echo base_url();?>favicon.ico"> -->
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/logo/vistacks_icon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo/vistacks_icon.png">

    <link rel="manifest" href="<?php echo base_url();?>assets/images/manifest/manifest.json">
    <meta name="theme-color" content="#377dff">
    <script type="text/javascript">
            var Pusher = {};
(function($p){
   
   var listeners = [];

  $p.push = function(cb){
    listeners.push(cb);
  };

  $p.notify = function(){
    listeners.forEach(function(v){
      v();
    });
  }
  
})(Pusher);
        </script>
  </head>