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

    $pageTitle = 'e-Olymp Page 1';
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

        <h1 class="my-4">e-Olymp
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">e-Olymp</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://miro.medium.com/max/1440/1*4BQDN46Qwq8f4zznnhbhtw.gif" alt="Repeated Josephus">
          <div class="card-body-olymp">
            <h2 class="card-title">Repeated Josephus</h2>
            <p class="card-text">At first, there are n people numbered 1 to n around a circle and 
          every second remaining person will ....</p>
            <a href="olymp-repeated-josephus.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-olymp">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://static.e-olymp.com/content/3d/3d3e6fc2a9a01e86a4b7cc5758c9318f0d9890a1.gif" alt="Grasshopper">        
          <div class="card-body-olymp">
            <h2 class="card-title">Grasshopper</h2>
            <p class="card-text">Grasshopper lives in the teacher's room. It likes to jump on ...</p>
            <a href="olymp-grasshopper.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-olymp">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://www.channelfutures.com/files/2015/01/simple-2.jpg" alt="Simple Problem">          
          <div class="card-body-olymp">
            <h2 class="card-title">Simple Problem</h2>
            <p class="card-text">Program reads two-digit number and prints every digit, separated by a space.</p>
            <a href="olymp-simple-problem.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-olymp">
            Posted on January 5, 2021 by
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