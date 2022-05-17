
// var ab_url = "http://127.0.0.1/vms/";
var ab_url = "http://localhost:8020/vmsfront/app/";
$(document).ready(function(){
  $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get(ab_url+"api/searchemployee", {employee: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });


// search for employee from admin
  $('.admin-search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get(ab_url+"api/admin_search_employee", {employee: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".admin-search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });


// checkinappointment
function checkin_appointment(){
         dataString = $("#checkinappointment").serialize();
           $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(300);　
          });
    
              $.ajax({
           type: "POST",
           url: ab_url+"api/checkinappointment",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                  // trigger loading screen
                    if($.isEmptyObject(data.error)){
                    // clear previous error
                    $("#alert_fail").css('display', 'none');
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.welcome_msg+'</strong>');
                    $("#checkinappointment").css('display', 'none');
                    // Get the visitor tag
                    $("#visitortag").load(ab_url+"boxes/visitortag/"+ data.checkin_id);
                     // welcome visitor with voice
                    if(responsiveVoice.voiceSupport()) {
                      responsiveVoice.speak(data.welcome_msg,  "Arabic Female");
                    }
                     

                   
                }
                else{
                   // clear previous errors 
                    // $("#alert_fail").css('display', 'none');
                    $("#alert_fail").empty();
                   
                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            } // removeloading screen
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(300);
      },500);
    });

     }

       $("#checkinappointment").submit(function(){
        checkin_appointment();
        return false;
     });



});


 
$(document).ready(function(){
  $("#loadpagebtn").click(function(){
    $("#pagecontent").load("component/checkin");
    // to load specific content in a page
    // $("#div1").load("demo_test.txt #p1");
  });
});



  setInterval(function(){
      $('#qrcode_load').load(ab_url+'qrscan');
 },20000);
  setTimeout(function() {
    $('#qrcode_load').load(ab_url+'qrscan');
}, 0); //
 

   $(document).ready(function() {
 setInterval(function(){
      $('#summaryTicketList').load(ab_url+'admin/box/recent_checkin');
 },10000);
  setTimeout(function() {
    $('#summaryTicketList').load(ab_url+'admin/box/recent_checkin');
}, 0); //
}
);


  $(document).ready(function() {
  
       function checkin_visitor(){
         dataString = $("#checkinvisitor").serialize();

         // triger loading screen 
         $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(300);　
          });
              $.ajax({
           type: "POST",
           url: ab_url+"api/checkinvisitor",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    $("#alert_fail").empty();
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.welcome_msg+'</strong>');
                    $(".done_image_class").css('display','block'); 
                    $("#checkinvisitor").css('display', 'none');
                    // welcome visitor with voice
                    // if(responsiveVoice.voiceSupport()) {
                    //   responsiveVoice.speak(data.welcome_msg,  "Arabic Female");
                    // }
                    // if(responsiveVoice.isPlaying()) {
                    //     console.log("I hope you are listening");
                    //   }
                    $("#visitortag").load(ab_url+"boxes/visitortag/"+ data.checkin_id);
                  
                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();
                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(300);
      },500);
      });
     }

       $("#checkinvisitor").submit(function(){
        checkin_visitor();
        return false;
     })


   function book_appointment(){
         dataString = $("#book_appointment").serialize();
              $.ajax({
           type: "POST",
           url: ab_url+"api/addappointment",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.welcome_msg+'</strong>');
                    $(".done_image_class").css('display','block'); 
                    $("#book_appointment").css('display', 'none');
                   
                }
                else{
                   // clear previous errors 
                    // $("#alert_fail").css('display', 'none');
                    $("#alert_fail").empty();

                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            }
           });

     }

       $("#book_appointment").submit(function(){
        book_appointment();
        return false;
     })


 function admit_visitor(){
         dataString = $("#admit_visitor").serialize();
              $.ajax({
           type: "POST",
           url: ab_url+"api/addappointment",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.welcome_msg+'</strong>');
                    $(".done_image_class").css('display','block'); 
                    $("#book_appointment").css('display', 'none');
                     $("#visitortag").load(ab_url+"boxes/visitortag/"+ data.checkin_id);
                   
                }
                else{
                   // clear previous errors 
                    // $("#alert_fail").css('display', 'none');
                    $("#alert_fail").empty();

                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            }
           });

     }

       $("#book_appointment").submit(function(){
        book_appointment();
        return false;
     })




function checkin_pre_visit(){
         dataString = $("#checkin_pre_visit").serialize();
                $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(300);　
          });
    $.ajax({
           type: "POST",
           url: ab_url+"api/checkinprevisitor",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.welcome_msg+'</strong>');
                    $("#checkin_pre_visit").css('display', 'none');
                    $("#visitortag").load(ab_url+"boxes/visitortag/"+ data.checkin_id);
                  
                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();
                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(300);
      },500);
      });
     }

       $("#checkin_pre_visit").submit(function(){
        checkin_pre_visit();
        return false;
     })

        function checkout_visitor(){
         dataString = $("#checkoutvisitor").serialize();
                $(document).ajaxSend(function() {6+
            $("#loadingoverlay").fadeIn(300);　
          });
    
              $.ajax({
           type: "POST",
           url: ab_url+"api/checkoutvisitor",
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){
                    $("#alert_success").css('display', 'block');
                    $("#alert_success").append('<strong>'+ data.msg+'</strong>'); 
                    $(".done_image_class").css('display','block');
                    // clear previous error
                    $("#alert_fail").css('display', 'none');
                    // clear form 
                    $("#checkoutvisitor").css('display', 'none');
                     if(responsiveVoice.voiceSupport()) {
                      responsiveVoice.speak(data.msg,  "Arabic Female");
                    }
                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();

                   // display new triggered error
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');
                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(300);
      },500);
      });
     }

     $("#checkoutvisitor").submit(function(){
        checkout_visitor();
        return false;
     })





      if(jQuery("#menu_overlay_open").length > 0) {
      var is_ie9 = jQuery('html').hasClass('ie9') ? true : false;

      if(is_ie9 == true) {
        jQuery("#topMain").hide();
      }

      // open
      jQuery(".rounded-logo").bind("click", function(e) {
        e.preventDefault();
        
        jQuery('body').addClass('show-menu');

        if(is_ie9 == true) {
          jQuery("#topMain").show();
        }

      });


    }

     });




 
document.getElementById("capture-trigger").addEventListener("click", capture_trigger);
function capture_trigger() {
  // window.addEventListener("load", function(){
  // [1] GET ALL THE HTML ELEMENTS
  var video = document.getElementById("capture-show"),
      canvas = document.getElementById("capture-canvas"),
      take = document.getElementById("capture-take"),
      capture_input = document.getElementById("capture_input");


  // [2] ASK FOR USER PERMISSION TO ACCESS CAMERA
  // WILL FAIL IF NO CAMERA IS ATTACHED TO COMPUTER
  navigator.mediaDevices.getUserMedia({ video : true })
  .then(function(stream) {
    // [3] SHOW VIDEO STREAM ON VIDEO TAG
    video.srcObject = stream;
    video.play();

    // [4] WHEN WE CLICK ON "TAKE PHOTO" BUTTON
    take.addEventListener("click", function(){
      // triger loading screen 
         // $(document).ajaxSend(function() {
         //    $("#loadingoverlay").fadeIn(300);　
         //  });
  // $("#captureModal").on('click', take, function () {
      // Create snapshot from video
      // display screen loader to stop user from clicking the capture button in case of slow network
    $("#loadingoverlay").css('display', 'block');
      var draw = document.createElement("canvas");
      draw.width = video.videoWidth;
      draw.height = video.videoHeight;
      var context2D = draw.getContext("2d");
      context2D.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
      // Upload to server
      draw.toBlob(function(blob){
        var data = new FormData();
        data.append('upimage', blob);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', ab_url+"visitors/upload", true);
        // video.pause();
        xhr.onload = function(){
          if (xhr.status==403 || xhr.status==404) {
            alert("ERROR LOADING 3-UPLOAD.PHP");
          } else {
              var JsonObject = JSON.parse(this.response);
              // convert t JSON object and get the array index from server
                FileName = JsonObject.filename;
            console.log(FileName);
            // alert(this.response);
            $("#capture-trigger").css('display', 'none');
             $(capture_input).append('<p class="alert text-success"><img src="'+ab_url+'assets/images/captures/'+FileName+'" width="40" height="40"/><span><i class="fa fa-check"></i> Successfully captured <span></p>');
             $(capture_input).append('<input type="hidden" name="upload_image" value = "'+FileName+'"/>   <div class="row"> <div class="col-md-12"> <button type="submit" class="btn btn-primary btn-v"><i class="fa fa-check"></i> CHECK IN</button> </div></div>');
             // close the camera pop 
             $("#captureModal").fadeOut(300);
             // remove loader after successful capture
            $("#loadingoverlay").css('display', 'none');
            $(".modal-open").css('display', 'none');
            $(".modal-open").css('overflow', 'scroll');
          }
        };
        xhr.send(data);
      });
    });
  })
  .catch(function(err) {
    document.getElementById("capture-controls").innerHTML = "Please enable access and attach a camera";
  });
};


 function form_submitter(formid, formurl){
         dataString = $(formid).serialize();
         // triger loading screen 
         $(document).ajaxSend(function() {
            $("#loadingoverlay").fadeIn(300);　
          });
              $.ajax({
           type: "POST",
           url: formurl,
           // dataType: "json",
           data: dataString,          
  
           success:function(data){
                var data = JSON.parse(data);
                console.log(data);
                    if($.isEmptyObject(data.error)){

                    $("#alert_fail").empty();
                    $("#alert_success").empty();
                    $("#alert_fail").css('display', 'none');
                    $("#alert_success").css('display', 'block');
                    $(".hide_after_submit").css('display', 'none');
                    $("#alert_success").append('<strong>'+ data.success+'</strong>');

                    $(".show_after_submit").css('display', 'block');
                    // clear everything inside the form
                }
                else{
                   // clear previous errors 
                    $("#alert_fail").empty();
                    $("#alert_fail").empty();
                   // display new triggered error
                    $("#alert_success").css('display', 'none');
                    $("#alert_fail").css('display', 'block');
                    $('#alert_fail').append('<div>'+ data.error +'</div>');       

                }
                
            }
           }).done(function() {
      setTimeout(function(){
        $("#loadingoverlay").fadeOut(3000);
      },500);
      });
     }
         window.form_submitter=form_submitter;


            $("#addkpi").submit(function(){
        form_submitter(formid, formurl);
        return false;
     });


// admin

