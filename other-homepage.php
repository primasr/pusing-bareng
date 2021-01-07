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

    $pageTitle = 'Other Page 1';
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

        <h1 class="my-4">Other
          <small><small><small><i>Page 1</i></small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">Other</li>
        </ol>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://img.antaranews.com/cache/800x533/2020/06/28/ae0b9877-d839-40c1-bff5-4473f7164d1a.jpg" alt="Bantuan Nasional">
          <div class="card-body-other">
            <h2 class="card-title">Bantuan Nasional</h2>
            <p class="card-text">Berhubungan dengan pandemik yang sedang terjadi, 
          pemerintah Negara nepisi ingin menyalurkan bantuan kepada ....</p>
            <a href="other-bantuan-nasional.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-other">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://web.cs.wpi.edu/~cs507/f98/classes/class04/fig01.gif" alt="Depth Pohon">        
          <div class="card-body-other">
            <h2 class="card-title">Depth Pohon</h2>
            <p class="card-text">Diberikan sebuah Binary Search Tree, tentukan jumlah dari 2 node dengan ...</p>
            <a href="other-depth-pohon.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-other">
            Posted on January 5, 2021 by
            <a href="about.php">Admin</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4 whole-card-shadow">
          <img class="card-img-top img-shadow" width="750" height="300" src="https://image.freepik.com/free-vector/i-love-chemistry-colored-background_104589-53.jpg" alt="Simple Problem">          
          <div class="card-body-other">
            <h2 class="card-title">I Love Kimia</h2>
            <p class="card-text">Hainnes adalah salah satu mahasiswi yang tinggal di planet Nepisi. 
          Ia berkuliah di ...</p>
            <a href="other-i-love-kimia.php" target="_blank" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted card-footer-other">
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