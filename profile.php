<?php
    session_start();

    $id = $_SESSION['id'];
    //$id = $_GET['id'];
    if(!($_SESSION)){
        header('location: login.php?redirectProfile='.$id);
    }

    include 'conn.php';
    $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

    $rows = mysqli_query($conn,$sql);
    $i = 0;
    mysqli_close($conn);
    $data = $rows->fetch_assoc();

    //$result = mysqli_query($conn,$sql);
    //$row = $result->fetch_assoc();

    // $pageTitle = 'Profil @'.$data['username'].' | Instagram KA WE :)';
    $pageTitle = 'Profile';
    echo ("<title> $pageTitle </title>");
    include 'header.php';
?>

<!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Profile
        <small><small><small>Profile</small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>

        <!-- Team Members -->
        <div class="row justify-content-center">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
            <img class="card-img-top" src="uploads/<?php echo $data['gambar'] ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $data['username'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['email']; ?></h6>
                <p class="card-text"><?php echo $data['bio']; ?></p>
            </div>
            </div>
        </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    