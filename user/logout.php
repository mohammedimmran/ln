<?php

    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_password']);
    unset($_SESSION['user_address']);
  
    unset($_SESSION['user_number']);
  
    session_destroy();
    
    header("Location:../index.php");

?>