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
        if(!$_SESSION['admin_name'])
        {
            header("location:index.php");
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
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
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
                    <h1 class="text-dark text-center">Plants</h1>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plant Name</th>
                        <th scope="col">Plant about</th>
                        <th scope="col">Plant care</th>
                        <th scope="col">How to grow</th>
                        <th scope="col">Price</th>
                        <th scope="col">status</th>
                       
                    </tr>
                </thead>

                <tbody>

                    <?php

                    

                    $sql = "SELECT * FROM `plant`";
                    $result = mysqli_query($conn ,$sql);

                    $count=0;

                    while($row = mysqli_fetch_assoc($result)){

                          
                          $plant_id=$row['plant_id'];
                          $plant_name=$row['plant_name'];
                          $plant_care=$row['plant_care'];
                          $grow=$row['grow'];
                          $about=$row['about'];
                          
                         
                          $plant_price=$row['plant_price'];
                          $status=$row['status'];

                    

                          $count++;

                          echo'<tr>
                            <th scope="row">'.$count.'</th>
                            <td>'.$plant_name.'</td>
                            <td>'.$about.'</td>
                            <td>'.$plant_care.'</td>
                            <td>'.$grow.'</td>
                            <td>'.$plant_price.'</td>
                            
                           
                            <td><a class="btn btn-success"  href="change_status.php?plant_id='.$plant_id.'" >Publish</a><br>'.$status.'</td>

                           
                            
                          
                          
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