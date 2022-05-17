
<script src="<?php echo base_url();?>assets/admin/js/core.min.js"></script>

  <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts.js"></script> -->

<script src="<?php echo base_url();?>push/config.js"></script>
<script src="<?php echo base_url();?>push/demo.js"></script>
<script src="<?php echo base_url();?>push/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/customscript.js"></script>
<script type="text/javascript">

$(document).ready(function() {

    $("#frmCSVImport").on("submit", function () {



      $("#response").attr("class", "");

        $("#response").html("");

        var fileType = ".csv";

        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");

        if (!regex.test($("#file").val().toLowerCase())) {

              $("#response").addClass("error");

              $("#response").addClass("display-block");

            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");

            return false;

        }

        return true;

    });

});

</script> 


 