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
<?php       session_start();
                     
    ?>

    <?php
        if(!$_SESSION['seller_email'])
        {
            header("location:seller_login.php");
        }

    ?>
    <!-- db connection -->
    <?php    include '../include/_dbconnect.php';       ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LeafNow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./seller_welcome.php">Home <span class="sr-only"></span></a>
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

   






<div class="container-fluid mt-4 pt-4" style="margin-bottom:12rem;">
        <div class="container-fluid">
            <table class="table table-responsive-sm  table-responsive-md ">
                <thead class="thead">
                    <h1 class="text-dark text-center">Orders</h1>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plant Name</th>
                        <th scope="col">user name</th>
                        <th scope="col">user address </th>
                        <th scope="col">user email </th>
                        <th scope="col">Contact number </th>
                        <th scope="col">price </th>
                     
                       
                    </tr>
                </thead>

                <tbody>

                    <?php

                    $seller_id=$_SESSION['seller_id'];

                    $sql = "SELECT user_db.user_name ,  user_db.user_address , user_db.user_email ,user_db.user_number , users_applied_plant_db.plant_id, users_applied_plant_db.plant_name , users_applied_plant_db.plant_price 
                     FROM `users_applied_plant_db`  Join `user_db`   ON user_db.user_id = users_applied_plant_db.user_id   WHERE seller_id='$seller_id' ";
                    $result = mysqli_query($conn ,$sql);

                    $count=0;

                    while($row = mysqli_fetch_assoc($result)){

                          
                          $plant_id=$row['plant_id'];
                          $plant_name=$row['plant_name'];
                         
                          $user_name=$row['user_name'];
                          $user_address=$row['user_address'];
                          $user_email=$row['user_email'];
                          $user_number=$row['user_number'];
                          
                         

                          $plant_price=$row['plant_price'];
                    

                          $count++;

                          echo'<tr>
                            <th scope="row">'.$count.'</th>
                            <td>'.$plant_name.'</td>
                            <td>'.$user_name.'</td>
                            <td>'.$user_address.'</td>
                            <td>'.$user_email.'</td>
                            <td>'.$user_number.'</td>
                            <td>'.$plant_price.'</td>
                           
                            
                          
                          
                          </tr>';
                      }
                    ?>

                </tbody>
            </table>
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