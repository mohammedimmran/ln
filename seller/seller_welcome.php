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
  if (!$_SESSION['seller_email']) {
    header("location:seller_login.php");
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
          <a class="nav-link" href="index.php">Home
            <span class="sr-only"></span></a>
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

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block  w-100" style="height:90vh" src="https://thumbs.dreamstime.com/b/cute-autumn-leaf-cute-autumn-leaf-cartoon-character-156215982.jpg" alt="First slide">
      </div>

    </div>
  </div>

  <div>
    <?php include '../footer.php';       ?>
  </div>

  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>