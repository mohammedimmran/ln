<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   

    <title>LeafNow</title>

</head>

<body>

    <?php

session_start();
include '../include/_dbconnect.php'; 
?>

<?php
        if(!$_SESSION['seller_email'])
        {
            header("location:seller_login.php");
        }

    ?>

    <?php
    

    if(isset($_POST['register'])){

        
    $plant_name = $_POST['plant_name'];
    
    $plant_price = $_POST['plant_price'];
    $about = $_POST['about'];
    $grow = $_POST['grow'];
    $seller_id=$_SESSION['seller_id'];
 
    $plant_care = $_POST['plant_care'];

    $sql = "SELECT * FROM `plant` WHERE plant_name = '$plant_name'  "; 
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0)
    {
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> already present
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
          </div>';

    }
    else
    {

    $sql2 = "INSERT INTO `plant` ( `seller_id`,`plant_name`, `plant_price`, `about`, `grow`,   `plant_care`)
             VALUES ('$seller_id','$plant_name', '$plant_price', '$about', '$grow','$plant_care')";
    $result2 = mysqli_query($conn, $sql2);

    $alert=true;

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>  Done 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>';


}







}
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LeafNow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="my_plants.php">My plants</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="order.php">Orders</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Discussion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    
      
    </ul>
    
  </div>
    </nav>

    <div class="containermb-4" id="header">
    

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h1 class="text-warning ">New Plant</h1>
                    <form method="POST" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Plant Name</label>
                            <input type="text" class="form-control"  name="plant_name"
                                aria-describedby="emailHelp" required="required">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Plant price</label>
                            <input type="text" class="form-control"  name="plant_price"
                                aria-describedby="emailHelp" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Plant about</label>
                            <input type="text" class="form-control"  name="about"
                                aria-describedby="emailHelp" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                 how to grow</label>
                            <input type="text" class="form-control"  name="grow"
                                aria-describedby="emailHelp" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Plant care</label>
                            <input type="text" class="form-control"  name="plant_care"
                                aria-describedby="emailHelp" required="required">
                        </div>
                       

                </div>
               
    

                <button type="submit" class="btn btn-primary font-weight-leight m-2" name="register">Submit</button>
               
                </form>

            </div>

        </div>

    </div>

    </div>

    

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>