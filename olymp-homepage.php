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

    $pageTitle = 'TLX Page 1';
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

        <h1 class="my-4">TLX TOKI
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">TLX TOKI</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://simplesnippets.tech/wp-content/uploads/2018/03/hello-world-program-in-c.jpg" alt="Hello World!">
          <div class="card-body">
            <h2 class="card-title">Hello World</h2>
            <p class="card-text">Program Pertama: Menuliskan Hello World!</p>
            <a href="tlx-hello-world.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 26, 2020 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://2.bp.blogspot.com/-hE4VsLS1KIY/WwFbWe1t44I/AAAAAAAAB_U/XEdBkQ8UYYsS-i14LrFnqAkIrcpOnEEEACLcBGAs/s400/for1.PNG" alt="Caesar Chipper">
          <div class="card-body">
            <h2 class="card-title">Caesar Chipper</h2>
            <p class="card-text">Membuat program Caesar Chipper</p>
            <a href="tlx-caesar-chipper.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 3, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://theoryofprogramming.azurewebsites.net/wp-content/uploads/2017/12/rotate-1.jpg" alt="Card image cap" height="300" width="750">
          <div class="card-body">
            <h2 class="card-title">Rotasi Matriks</h2>
            <p class="card-text">Membuat program me-rotasi sebuah matriks</p>
            <a href="tlx-rotasi-matriks.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 3, 2021 by
            <a href="#">Admin</a>
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
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-2.php">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-3.php">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-3.php">Last &rarr;</a>
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