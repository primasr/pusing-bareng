<?php
    session_start();

    include 'conn.php';

    if($_SESSION){
        header('location: index.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');
    
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $bio = $_POST['bio'];

            $target_dir = "uploads/";
            $image = $_FILES["image"]["name"];

            $target_file = $target_dir.basename($image);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $allowedTypes = array('jpg','png','jpeg','gif');

            function myAlert($pesan) {
                echo "<script type='text/javascript'>alert('$pesan');</script>";
            }

            if(in_array($imageFileType,$allowedTypes)){
                if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
    
                    $sql = "INSERT INTO users (`email`, `username`, `password`, `bio`, `gambar`)
                    VALUES ('$email', '$username', '$password', '$bio' , '$image')";
                    if (mysqli_query($conn, $sql)) {
                        myAlert("New record created successfully");
                        //echo "New record created successfully";
                        //header('location: login.php');
                    } else {
                        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        myAlert("Error: " . $sql . "<br>" . mysqli_error($conn));
                    }
                }else{
                    //echo "Sorry, there was an error uploading your file.";
                    myAlert("Sorry, there was an error uploading your file.");
                }
            }else{
                //echo 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                myAlert("Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.");
            }
        }
        mysqli_close($conn);

    }
        
    $pageTitle = 'Register';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Register
        <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Register</li>
        </ol>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-4">
                <form action="register.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required data-validation-required-message="Please enter your email.">
                    <small class="form-text text-muted">Lets gooo!!</small>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required data-validation-required-message="Please enter your username.">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" name="password" onkeyup='check();' required data-validation-required-message="Please enter your password.">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" onkeyup=' check();' required data-validation-required-message="Please enter your password.">
                    <span id="message"></span>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" placeholder="Max. 30 Karakter" required data-validation-required-message="Please enter your message.">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload foto syantik</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password Matches!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password is not the same!';
            }
        }
    </script>

<?php 
    include 'header 2.php';
    include 'footer.php'; 
?>