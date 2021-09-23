<?php

    session_start();
    unset($_SESSION['seller_id']);
    unset($_SESSION['seller_name']);
    unset($_SESSION['seller_email']);
    unset($_SESSION['seller_password']);
    unset($_SESSION['seller_address']);
  
    unset($_SESSION['seller_number']);
  
    session_destroy();
    
    header("Location:../index.php");

?>