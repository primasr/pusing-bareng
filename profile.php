<?php
    session_start();

    $id = $_GET['id'];
    if(!($_SESSION)){
        header('location: login.php?redirectProfile='.$id);
    }

    include 'conn.php';
    $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

    $rows = mysqli_query($conn,$sql);
    $i = 0;
    mysqli_close($conn);
    $data = mysqli_fetch_assoc($rows);

    $pageTitle = 'Profil @'.$data['username'].' | Instagram KA WE :)';
    include 'header.php';
?>

    <div class="row no-gutters">
        <div class="col-xl-12 img-cover">
            <img src="uploads/<?php echo $data['image']?>" alt="Foto profil <?php echo $data['username'] ?>" class="cover-img">
            <div class="overlay-black"></div>
            <img class="profile-img img-responsive img img-thumbnail" src="uploads/<?php echo $data['image'] ?>" alt="Foto profil <?php echo  $data['username'] ?>">
            <h2>@<?php echo $data['username'] ?></h2>
        </div>
    </div>
    <div class="row no-gutters" style="margin-top: 60px;">
        <div class="col-xl-3">
            <ul>
                <li><h4>Explore</h4></li>
                <li><h4>Settings</h4></li>
            </ul>
        </div>
        <div class="col-xl-6 img-cover">
            <ul>
                <li>
                    <h4>Bio</h4>
                    <a><?php echo $data['bio']; ?></a>
                </li><br />
                <li>
                    <h4>Desc</h4>
                    <a><?php echo $data['description']; ?></a>
                </li><br />
                <li>
                    <h4>Contact</h4>
                    <a><?php echo $data['email']; ?></a>
                </li><br />
            </ul>
        </div>
        <div class="col-xl-3"></div>
    </div>

<?php
    include 'footer.php'
?>    