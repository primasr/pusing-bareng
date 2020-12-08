<?php
    session_start();

    if(!($_SESSION)){
        header('location: login.php');
    }

    include 'conn.php';

    //ga mau masuk ke isset post submit ini

    if(isset($_POST['submit'])){
        echo "MASUK BOS 2";
    //    var_dump($_FILES['gambar']);

        $id = $_SESSION['id'];
        $bio = $_POST['bio'];
        $targetDir = "uploads/";
        $fileName = $_FILES['photo']['name'];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$targetFilePath)){
                echo "MASUK BOS 3";

                $sql = "UPDATE users SET `bio` = '$bio' , `image` = '$fileName' WHERE id = $id ";
                // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`)";
                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
            echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
        header('Location: index.php');

    }

    // var_dump($_GET['id']);
    
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    
    mysqli_close($conn);
    
    
    $pageTitle = 'Update Profil | Pusing Bareng';
    echo ("<title> $pageTitle </title>");
    include 'header.php';
?>
   
    <div class="jumbotron">
        <div class="container">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Bio</label>
                <input type="text" class="form-control" name="bio" value="<?= $row['bio'] ?>">
                <small id="emailHelp" class="form-text text-muted">Jangan lebay bang</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload foto syantik</label>
                <input type="file" class="form-control-file" name="photo">
            </div>
            <!--
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            -->
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>
        </div>
    </div>

<?php
include 'header 2.php'; 
include 'footer.php' 
?>