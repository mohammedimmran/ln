<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script>
    function myFunction() {
      document
        .getElementById("download")
        .style
        .display = "none";
      window.print();
    }
  </script>

  <title>LeafNow</title>

</head>

<body>
  <?php session_start();

  ?>

  <?php include '../include/_dbconnect.php';       ?>

  <div class="container">
    <h1 class="text-center mt-4 text-success">LeafNow</h1>
  </div>

  <?php

  $plant_id = $_GET['plant_id'];
  $seller_id = $_GET['seller_id'];
  $plant_name = $_GET['plant_name'];
  $plant_price = $_GET['plant_price'];
  $seller_name = $_GET['seller_name'];

  $user_id = $_SESSION['user_id'];

  echo '
        <div class="container mt-4 pt-4">
        <table class="table"  id="invoice">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">plant name</th>
      <th scope="col">seller name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
    
  
    <tr>
      <th scope="row">1</th>
      <td>' . $plant_name . '</td>
      <td>' . $seller_name . '</td>
      <td>' . $plant_price . '</td>
    </tr>
  </tbody>
</table>
</div>
';



  $add = "INSERT INTO `users_applied_plant_db` ( `user_id`, `seller_id`, `plant_id`, `plant_name`, `seller_name` , `plant_price`)
                                VALUES ( '$user_id', '$seller_id', '$plant_id', '$plant_name', '$seller_name' , '$plant_price')";

  $result = mysqli_query($conn, $add);








  ?>

  <div class="container">
    <div class="ext-right ">
      <button class="btn btn-primary" id="download" onclick="myFunction()">
        Print</button>
    </div>
  </div>

  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>