<?php       session_start();
                     
    ?>

    <?php
        if(!$_SESSION['admin_name'])
        {
            header("location:index.php");
        }

    ?>
    
    <?php    include '../include/_dbconnect.php';       ?>


<?php



$plant_id = $_GET['plant_id']; 
$change_status="1";

$status="UPDATE `plant` SET `plant`.`status` = '$change_status'
         WHERE `plant`.`plant_id` ='$plant_id '";
$result = mysqli_query($conn, $status);

if($result){
    header("location:admin_welcome.php");
}




?>