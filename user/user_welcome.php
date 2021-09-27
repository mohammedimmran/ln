<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">

    <title>LeafNow</title>

</head>

<body>
    <?php session_start();

    ?>

    <?php
    if (!$_SESSION['user_email']) {
        header("location:user_login.php");
    }

    ?>
    <!-- db connection -->
    <?php include '../include/_dbconnect.php';       ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LeafNow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./user_welcome.php">Home
                        <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myplants.php">Buyed Plants</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="discussion.php">Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>
    </nav>

   

    <div class="container">

        <!-- recent posts -->
        <h1 class="text-center  text-uppercase recent_post">Recent Posts</h1>

        <div class="row">
            <?php


            $sql = "SELECT * FROM seller JOIN plant ON seller.seller_id = plant.seller_id WHERE plant.status = 1";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

                $plant_id = $row['plant_id'];
                $plant_name = $row['plant_name'];
                $plant_price = $row['plant_price'];
                $plant_care = $row['plant_care'];
                $about = $row['about'];
                $grow = $row['grow'];
                $status = $row['status'];

                $seller_id = $row['seller_id'];
                $seller_name = $row['seller_name'];
                $seller_email = $row['seller_email'];
                $seller_number = $row['seller_number'];
                $seller_address = $row['seller_address'];



                echo '
    <div class="col">
    <div class="card-group">
 
    <div class="conatiner">
    <div class="card ">
      <img class="card-img-top" style="height:20vh;" src="https://thumbs.dreamstime.com/b/cute-autumn-leaf-cute-autumn-leaf-cartoon-character-156215982.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Plant Name:' . $plant_name . '</h5>
        <p class="card-text">Price: ' . $plant_price . 'Rs</p>
        <p class="card-text">seller :' . $seller_name . '</p>
      <a href="buy.php?plant_id=' . $plant_id . '&plant_name=' . $plant_name . '&seller_id=' . $seller_id . '&seller_name=' . $seller_name . '&plant_price=' . $plant_price . '" class="btn btn-dark  mt-4">Buy</a>


        
      </div>
    </div>
    </div>
    
  </div>
  </div>';
            }

            ?>
        </div>
    </div>

    <div class="container">
        <p class="text-center font-weight-bold text-warning">
            Loading . . .
        </p>
    </div>

    <div>
        <?php include '../footer.php';       ?>
    </div>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>