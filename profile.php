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
<style>
.container_2{
  position: relative;
  width: 50%;
  margin-left: auto;
  margin-right: auto;  
}

.image_2 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay_2 {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container_2:hover .overlay_2 {
  bottom: 0;
  height: 100%;
}

.text_2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

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

        <h3 style="text-align: center">Slide in Picture to see your Profile</h3>
        <br>

        <div class="container_2">
            <img src="uploads/<?php echo $data['gambar'] ?>" alt="Profil" class="image_2">
            <div class="overlay_2">
                <div class="text_2">
                    <h4 class="card-title"><?php echo $data['username'] ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['email']; ?></h6>
                    <p class="card-text"><?php echo $data['bio']; ?></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    