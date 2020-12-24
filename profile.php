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
    $pageTitle = 'PB | Profile';
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

        <!-- Content Row -->
        <div class="row">
            <div class="row no-gutters">
                <div class="col-xl-12 img-cover">
                    <!-- <img src="uploads/<?php echo $data['gambar']?>" alt="Foto profil <?php echo $data['username'] ?>" class="cover-img">
                    <div class="overlay-black"></div> -->
                    <img class="profile-img img-responsive img img-thumbnail" width="300" height="300" src="uploads/<?php echo $data['gambar'] ?>" alt="Foto profil <?php echo  $data['username'] ?>">
                    <!-- <h2>@<?php echo $data['username'] ?></h2> -->
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-6 img-cover">
                    <ul>
                        <li>
                            <h4>Username</h4>
                            <a>@<?php echo $data['username'] ?></a>
                        </li><br />
                        <li>
                            <h4>Bio</h4>
                            <a><?php echo $data['bio']; ?></a>
                        </li><br />
                        <li>
                            <h4>Contact</h4>
                            <a><?php echo $data['email']; ?></a>
                        </li><br />
                    </ul>
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