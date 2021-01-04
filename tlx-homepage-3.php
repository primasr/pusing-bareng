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

    $pageTitle = 'TLX Page 3';
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
          <small><small><small><i>Page 3</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">TLX TOKI</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" height="300" width="750" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ySjneyKrLW1fI3F3ECtSCtXmlxpR5R61CA&usqp=CAU" alt="Hello World!">
          <div class="card-body">
            <h2 class="card-title">Ukuran Kejauhan</h2>
            <p class="card-text">Soal IDEAFUSE 2014 - Final CP — Problem G</p>
            <a href="tlx-ukuran-kejauhan.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 4, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" height="300" width="750" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ySjneyKrLW1fI3F3ECtSCtXmlxpR5R61CA&usqp=CAU" alt="Caesar Chipper">
          <div class="card-body">
            <h2 class="card-title">Candy Businessman</h2>
            <p class="card-text">Soal IDEAFUSE 2014 - Final ICPC Sumatra Provincial — Problem A</p>
            <a href="tlx-candy-businessman.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 4, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" height="300" width="750" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ySjneyKrLW1fI3F3ECtSCtXmlxpR5R61CA&usqp=CAU" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Hard Word</h2>
            <p class="card-text">Soal IDEAFUSE 2014 - Final ICPC Sumatra Provincial — Problem D</p>
            <a href="tlx-hard-word.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 4, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-1.php">&larr; First</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-1.php">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-2.php">2</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">3</a>
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