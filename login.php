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
                        header('Location: index.php');
                    }
                }
            } else{
                echo "No Dataset";
            }
        
        }
        mysqli_close($conn);

    }

    //$pageTitle = 'Login | Instagram KA WE :)';
    $pageTitle = 'Ini Login';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
    </ol>

    <div class="jumbotron">
        <div class="container">
            <h2>Dah daftar bang? Login skuy</h2>
            <form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
            
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username bang jago" required data-validation-required-message="Please enter your username.">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
            </div>
            
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?php
    include 'header 2.php';
    include 'footer.php';
?>