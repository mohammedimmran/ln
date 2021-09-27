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

    <?php

    session_start();
    include '../include/_dbconnect.php';
    ?>

    <?php


    if (isset($_POST['register'])) {


        $user_name = $_POST['user_name'];

        $user_email = $_POST['user_email'];
        $user_number = $_POST['user_number'];
        $user_address = $_POST['user_address'];

        $user_password = $_POST['user_password'];

        $hash = password_hash($user_password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM `user_db` WHERE user_name = '$user_name' AND  user_email = '$user_email' OR user_number = '$user_number' ";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> User already Registered Login now...
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
          </div>';
        } else {

            $sql2 = "INSERT INTO `user_db` ( `user_name`, `user_email`, `user_number`, `user_address`,   `user_password`)
             VALUES ('$user_name', '$user_email', '$user_number', '$user_address','$hash')";
            $result2 = mysqli_query($conn, $sql2);

            $alert = true;

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your Registration is Done ... Login now
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>';
        }
    }
    ?>

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
                    <a class="nav-link" href="/user">Buyer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/seller">Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="discussion.php">Discussion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="container-fluid mb-4" id="header">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h1 class="text-success ">User Registration</h1>
                    <form method="POST" data-aos="fade-right">
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Name</label>
                            <input type="text" class="form-control" id="comp_name" name="user_name" aria-describedby="emailHelp" required="required">
                        </div>

               
                <div class="form-group">
                    <label for="exampleInputEmail1">Email
                    </label>
                    <input type="email" class="form-control" id="comp_email" name="user_email" aria-describedby="emailHelp" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        Mobile Number</label>
                    <input type="text" class="form-control" id="comp_name" name="user_number" aria-describedby="emailHelp" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea class="form-control" id="comp_address" name="user_address" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1" required="required">
                </div>

                <button type="submit" class="btn btn-primary font-weight-leight m-2" name="register">Submit</button>
                <a href="user_login.php" class="text-success">Already have an account ? login here</a>
                </form>

            </div>

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