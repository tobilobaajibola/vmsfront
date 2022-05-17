<?php
 function verify_session_helper(){
        if(isset($_SESSION['user_account'])){
        return TRUE;
         }
      else{
        redirect(base_url().'login', 'refresh'); 
            exit;
      }
       }
       ?>