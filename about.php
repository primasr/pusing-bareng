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

    $pageTitle = 'About';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
      <!-- <small>Subheading</small> -->
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6 whole-card-shadow">
        <img class="img-fluid rounded mb-4" src="images/about.png" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Pusing Bareng</h2>
        <p style="text-align: justify"><i>Pusing bareng</i> merupakan website yang menyediakan berbagai penyelesaian soal pemrograman dari beberapa platform online judge yang ada di internet, seperti TLX TOKI, HackerRank, CSES, maupun yang lainnya.</p>
        <p style="text-align: justify"><i>Pusing Bareng</i> menyediakan fitur yang cukup lengkap untuk menunjang kebutuhan pengguna untuk menyelesaikan masalahnya. Seperti adanya fitur kolom komentar untuk membahas persoalan yang ada agar bisa dibalas oleh pengguna lain atau mungkin dari admin website ini sendiri.</p>
        <p style="text-align: justify">Pada <i>Pusing Bareng</i> ini juga, disediakan fitur <i>search</i> agar lebih memudahkan pengguna untuk mencari suatu persoalan yang ingin ia selesaikan.</p>
      </div>
    </div>
    <!-- /.row -->

    <br>
    <hr>
    <!-- Team Members -->
    <h2>Our Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4 whole-card-shadow">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/prima 1.png" alt="Prima">
          <div class="card-body">
            <h4 class="card-title">Prima Secondary R</h4>
            <h6 class="card-subtitle mb-2 text-muted">Leader</h6>
            <p class="card-text">Seorang mahasiswa semester 3 Institut Teknologi Sepuluh Nopember yang sedang berjuang memperoleh IP terbaiknya di semester ini</p>
          </div>
          <div class="card-footer">
            <a href="#">prima.s.r.2001@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 whole-card-shadow">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/prima 2.png" alt="Prima">
          <div class="card-body">
            <h4 class="card-title">Prima Lagi</h4>
            <h6 class="card-subtitle mb-2 text-muted">Co-Leader</h6>
            <p class="card-text">Seorang jombs yang ingin segera menemukan pendamping hidupnya. Namun apa daya, semuanya tidak semudah seperti yang ia pikirkan</p>
          </div>
          <div class="card-footer">
            <a href="#">prima@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 whole-card-shadow">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/prima cooler.png" alt="Prima">
          <div class="card-body">
            <h4 class="card-title">The Cooler Prima</h4>
            <h6 class="card-subtitle mb-2 text-muted">Cheer-Leader</h6>
            <p class="card-text">Trust me, he's still Prima. But cooler</p>
          </div>
          <div class="card-footer">
            <a href="#">cooler_prima@example.com</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    