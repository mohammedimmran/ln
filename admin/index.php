<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LeafNow</title>

</head>

<body>

    <?php

    session_start();
    include '../include/_dbconnect.php';
    ?>

    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container" style="max-width:30rem">
                    <h3 class="text-uppercase font-weight-bold text-success">User Login</h3>
                    <?php

                    if (isset($_POST['login'])) {

                        $admin_name = $_POST['name'];
                        $admin_password = $_POST['password'];

                        $sql = "SELECT * FROM `admin_db` WHERE admin_name='$admin_name' AND admin_password='$admin_password'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_array()) {

                                $_SESSION['admin_name'] = $admin_name = $row['admin_name'];
                                $_SESSION['admin_password'] = $admin_password = $row['admin_password'];




                                echo "<script>window.location.href='admin_welcome.php'</script>";
                            }
                        } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong>  Invalid Credentials...
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                    </div>';
                        }
                    }
                    ?>

                    <form method="POST" action="">

                        <div class="form-group">
                            <label for="exampleInputEmail1">user name</label>
                            <input type="email" class="form-control" name="name" aria-describedby="emailHelp" required="required">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required="required">
                        </div>

                        <button type="submit" class="btn btn-primary mr-4" name="login">Login</button>

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