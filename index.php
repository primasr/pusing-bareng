<?php
    session_start();
    include 'conn.php';

    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Instagram KA WE :)';
    include 'header.php';

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <img src="images/peeporip.gif" alt="PEEPORIP" width="50px">
            </a>
            <?php if ($_SESSION) : ?>
                <p class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0"><?php echo $_SESSION['username']?></p>
                <a href="update.php" class="mr-4">Update gan</a> 
                <a href="logout.php">Logout bang</a>
            <?php else: ?>
                <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    <div class="container">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach($rows as $row) : ?>
                <tr>
                    <td> <?= ++$i ?>  </td>
                    <td> <?=  $row['username'] ?>  </td>
                    <td> <?=  $row['email'] ?>  </td>
                    <td> <a href="profile.php?id=<?=$row['id']?>" class="btn btn-primary"> Details </a> </td>
                    <!-- <td> <img src="uploads/<?=$row['image']?>" alt=""></td> -->
                </tr>
            <?php endforeach;?>
        </table>
    </div>

<?php
    include 'footer.php'
?>    