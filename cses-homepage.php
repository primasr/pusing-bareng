<?php
    session_start();
    include 'conn.php';
 
   
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);
    
    /*
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);
    */

    $pageTitle = 'CSES Page 1';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
    include 'sidewidget-1.php';
?>
  <link href="style.css" rel="stylesheet">
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">CSES
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">CSES</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://i.ytimg.com/vi/QrZAee1PZBE/mqdefault.jpg" alt="Counting Rooms">
          <div class="card-body-cses">
            <h2 class="card-title">Counting Rooms</h2>
            <p class="card-text">You are given a map of a building, and your task is to count the number of its rooms ....</p>
            <a href="cses-counting-rooms.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-cses">
            Posted on January 4, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://i1.wp.com/twominfun.com/wp/wp-content/uploads/2018/05/Number-Puzzle-33-ans-15.png?resize=600%2C373" alt="Missing Number">        
          <div class="card-body-cses">
            <h2 class="card-title">Missing Number</h2>
            <p class="card-text">You are given all numbers between 1,2,..,n except one ...</p>
            <a href="cses-missing-number.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-cses">
            Posted on January 4, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://assets.leetcode.com/uploads/2019/10/20/hint_valid_mountain_array.png" alt="Increasing Array">          
          <div class="card-body-cses">
            <h2 class="card-title">Increasing Array</h2>
            <p class="card-text">You are given an array of n integers. You want to modify the array ...</p>
            <a href="cses-increasing-array.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-cses">
            Posted on January 4, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item disabled">
            <a class="page-link" href="#">&larr; First</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Last &rarr;</a>
          </li>
        </ul>

      </div>

      <?php
          include 'sidewidget-2.php';
      ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    