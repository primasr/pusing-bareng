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

    $pageTitle = 'TLX Page 2';
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
          <small><small><small><i>Page 2</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">TLX TOKI</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://gamedevtraum.com/wp-content/uploads/2019/11/factorial-de-un-numero-min.png" alt="Hello World!" height="300" width="750">
          <div class="card-body">
            <h2 class="card-title">Faktorial Ganjil Genap</h2>
            <p class="card-text">Membuat program untuk mencari faktor ganjil genap dari sebuah angka</p>
            <a href="tlx-faktorial-gg.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 3, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://www.wikihow.com/images_en/thumb/8/8f/Convert-from-Binary-to-Decimal-Step-1-Version-5.jpg/v4-460px-Convert-from-Binary-to-Decimal-Step-1-Version-5.jpg.webp" alt="Caesar Chipper" height="300" width="750">
          <div class="card-body">
            <h2 class="card-title">Konversi Biner</h2>
            <p class="card-text">Membuat program untuk mengkonversi suatu angka decimal menjadi biner</p>
            <a href="tlx-konveri-biner.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 3, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top img-shadow" src="https://cdn.britannica.com/67/19367-050-885866B4/Valley-Taurus-Mountains-Turkey.jpg" alt="Card image cap" height="300" width="750">
          <div class="card-body">
            <h2 class="card-title">Menggambar Pegunungan</h2>
            <p class="card-text">Membuat program untuk menggambar pegunungan dengan pola tertentu</p>
            <a href="tlx-menggambar-pegunungan.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 3, 2021 by
            <a href="#">Admin</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item ">
            <a class="page-link" href="tlx-homepage-1.php">&larr; First</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="tlx-homepage-1.php">1</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">2</a>
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