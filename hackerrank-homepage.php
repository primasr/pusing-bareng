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

    $pageTitle = 'Hackerrank Page 1';
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

        <h1 class="my-4">Hackerrank
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Hackerank</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://s3.amazonaws.com/hr-assets/0/1603195175-368d7f2732-1.gif" alt="Outdoor Study">
          <div class="card-body">
            <h2 class="card-title">Outdoor Study</h2>
            <p class="card-text">Setiap tahun, guru memutuskan memesan bis untuk transportasi Outdoor Study. Pada waktu mereka akan pergi, ....</p>
            <a href="hackerrank-outdoor-study.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 4, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://s3.amazonaws.com/hr-assets/0/1603430849-51fcf16587-2058Converted.png" alt="MudMud">
          <div class="card-body">
            <h2 class="card-title">MudMud dan Kakaknya</h2>
            <p class="card-text">MudMud sangat menyayangi kakaknya. Suatu ketika MudMud ulang tahun dan diberi hadiah ...</p>
            <a href="hackerrank-mudmud.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 4, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://media.suara.com/pictures/970x544/2018/01/30/82737-tempat-parkir.jpg" alt="Parkiran Aya">
          <div class="card-body">
            <h2 class="card-title">Parkiran Aya</h2>
            <p class="card-text">Terdapat sebuah sistem parkiran yang dapat memberi tahu pengunjung apakah mereka dapat memarkirkan ...</p>
            <a href="hackerrank-parkiran-aya.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
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