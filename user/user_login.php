<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">

        <title>LeafNow</title>

    </head>

    <body>

        <?php

session_start();
include '../include/_dbconnect.php'; 
?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LeafNow</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
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

        <div class="container-fluid" id="header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="container" style="max-width:30rem">
                        <h3 class="text-uppercase font-weight-bold text-warning">User Login</h3>
                    <?php

                        if(isset($_POST['user_login'])){
                        
                        $user_email = $_POST['user_email'];
                        $user_password = $_POST['user_password'];
                        
                        $sql = "SELECT * FROM `user_db` WHERE user_email='$user_email'";
                        $result = mysqli_query($conn, $sql);

                        if($result->num_rows>0){
                            while($row = $result->fetch_array()){

                                if(password_verify($user_password , $row['user_password']))
                                {
 
                                     
                                $_SESSION['user_id']=$user_id = $row['user_id'];
                                $_SESSION['user_name']=$user_name = $row['user_name'];
                              
                                $_SESSION['user_email']=$user_email = $row['user_email'];
                                $_SESSION['user_number']=$user_number = $row['user_number'];
                                $_SESSION['user_password']=$user_password = $row['user_password'];
                                $_SESSION['user_address']=$user_address = $row['user_address'];


                            
                                
                                echo "<script>window.location.href='user_welcome.php'</script>";
                                }


                               
                                
                            }
                        }

                        else
                        {
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
                                <label for="exampleInputEmail1">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="user_email"
                                    name="user_email"
                                    aria-describedby="emailHelp"
                                    required="required">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="user_password"
                                    id="user_password"
                                    required="required">
                            </div>

                            <button type="submit" class="btn btn-primary mr-4" name="user_login">Login</button>
                            <a href="user_register.php">New user ? register here</a>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <div>
            <?php    include '../footer.php';       ?>
        </div>

        <!-- bootstrap -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>

</html>