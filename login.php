<?php
    session_start();
    
    include 'conn.php';
        
    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            // session_start();
            $username = $_POST['username'];
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $password = password_verify($_POST['password'], $hash);

            // function myAlert($pesan) {
            //     echo "<script type='text/javascript'>swal('$pesan');</script>";
            // }

            function myAlert($pesan) {
                echo "<script type='text/javascript'>alert('$pesan');</script>";
            }
    
            $sql = "SELECT * FROM users WHERE `username`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if(password_verify($_POST['password'],$row['password'])){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('location: index.php');
                    }
                } else
                {
                    myAlert("Password incorrect");
                }
            } else{
                myAlert("Username Not Found in database :(");
            }
        
        }
        mysqli_close($conn);

    }

    //$pageTitle = 'Login | Instagram KA WE :)';
    $pageTitle = 'Login';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Login
        <!-- <small>Subheading</small> -->
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Login</li>
        </ol>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-4 bg-content-form">
                <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
                
                <div class="form-group">
                    <label><b>Username</b></label>
                    <input type="text" class="form-control  my-form" id="username" name="username" required data-validation-required-message="Please enter your username.">
                </div>
                
                <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="password" class="form-control my-form" id="password" name="password" required data-validation-required-message="Please enter your password.">
                </div>
                
                <br>
                <button type="submit" name="submit" id="submit" class="btn btn-success btn-block">Login</button>
                <br>
                <p style="text-align: center">or</p>
                <p style="text-align: center">Don't have an account? <a href="register.php">Register here</a></p>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php';
?>