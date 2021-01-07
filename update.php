<?php
    session_start();

    $id = $_SESSION['id'];

    if(!($_SESSION)){
        header('location: index.php?redirectProfile='.$id);
    }

    include 'conn.php';

    if(isset($_POST['submit'])){
        //    var_dump($_FILES['gambar']);
    
            $idd = $_SESSION['id'];
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
    
                    $sql = " UPDATE users SET `bio` = '$bio' , `gambar` = '$image' WHERE `id` = $idd ";
                    // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`)";
                    if(mysqli_query($conn,$sql)){
                        //echo "File Upload Success";
                        myAlert("Update Profile Success");
                        //header('location: profile.php');
                    }else{
                        // echo"File Upload Error";
                        myAlert("Update Profile Error");
                    }
                }else{
                    // echo "Sorry, there was an error uploading your file.";
                    myAlert("Sorry, there was an error uploading your file.");
                }
            }else{
                // echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                myAlert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.");
            }
            // header('location: register.php');
    
        }

    // var_dump($_GET['id']);
    
    // $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    // var_dump($row);
    
    mysqli_close($conn);
    
    
    $pageTitle = 'Update Profile';
    echo ("<title> $pageTitle </title>");
    include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Update
        <!-- <small>Subheading</small> -->
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ol>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row justify-content-center">
            <div class="col-lg-4 mb-4 bg-content-form">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" class="form-control my-form" name="bio" value="<?= $row['bio'] ?>">
                        <!-- <small id="emailHelp" class="form-text text-muted">Jangan lebay bang</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Re-Upload Foto Profil</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <!--
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    -->
                    <br>
                    <!-- <input type="submit" value="Submit" name="submit" class="btn btn-warming btn-block"> -->
                    <button type="submit" name="submit" id="submit" class="btn btn-warning btn-block">Update</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
include 'header 2.php'; 
include 'footer.php' 
?>