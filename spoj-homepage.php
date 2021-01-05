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

    $pageTitle = 'SPOJ Page 1';
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

        <h1 class="my-4">SPOJ
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">SPOJ</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="http://2.bp.blogspot.com/-wmnQtkUQ0wY/ThcBSULVrJI/AAAAAAAABvI/Q0CzlOYi62s/s1600/1.png" alt="Drawing Polygrams">
          <div class="card-body">
            <h2 class="card-title">Drawing Polygrams</h2>
            <p class="card-text">Drawing stars on the last page of a notebook is a very entertaining hobby ....</p>
            <a href="spoj-drawing-polygrams.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://jkstalent.com/wp-content/uploads/2015/12/herding-cats-2.jpg" alt="Herding">        
          <div class="card-body">
            <h2 class="card-title">Herding</h2>
            <p class="card-text">Oh no! A number of stray cats have been let loose in the city, 
          and as the City Cat Catcher ...</p>
            <a href="spoj-herding.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://images.twinkl.co.uk/tw1n/image/private/t_630/image_repo/6e/09/cfe2-m-101-divisibility-rules-powerpoint_ver_3.jpg" alt="Divisibility">          
          <div class="card-body">
            <h2 class="card-title">Divisibility</h2>
            <p class="card-text">Print all integers a<sub>i</sub> such that a<sub>i</sub> 
        is divisible by x ...</p>
            <a href="spoj-divisibility.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
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