  <script src="<?php echo base_url();?>assets/js/core.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  <!-- <script src="<?php //echo base_url();?>assets/js/customscript.js"></script> -->
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
