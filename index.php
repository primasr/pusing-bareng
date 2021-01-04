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

    $pageTitle = 'Pusing Bareng';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

  <style>
  .bg-text-2 {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    font-size: 50px;
    border: 10px solid #f1f1f1;
    position: relative; /* Stay fixed */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 300px;
    padding: 20px;
    text-align: center;
  }

  </style>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('https://www.itl.cat/pngfile/big/5-52330_keyboard-wallpapers-msi-keyboard.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3 class="bg-text-2">First Slide</h3> -->
            <p class="bg-text-2">Pusing Bareng</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3 class="bg-text-2">Second Slide</h3> -->
            <p class="bg-text-2">Pusing Bareng</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://i.pinimg.com/originals/71/57/9f/71579f1b83279b7a074a21b7ec7308fa.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3 class="bg-text-2">Third Slide</h3> -->
            <p class="bg-text-2">Pusing Bareng</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <h1 class="my-4">Selamat datang di Pusing Bareng</h1>

    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
    <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>

    <!-- Portfolio Section -->
    <h2>Platform Online Judge</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="tlx-homepage-1.php"><img class="card-img-top" src="images/tlx.png" alt="TLX TOKI"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="tlx-homepage-1.php">TLX TOKI</a>
            </h4>
            <p class="card-text">Platform Pemrograman Kompetitif. Platform # 1 Indonesia untuk 
            mengasah keterampilan pemrograman kompetitif Anda, dipersembahkan oleh Ikatan Alumni TOKI
            (Tim Olimpiade Komputer Indonesia)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="hackerrank-homepage.php"><img class="card-img-top" src="https://www.yosuccess.com/wp-content/uploads/2015/01/HackerRank2.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="hackerrank-homepage.php">HackerRank</a>
            </h4>
            <p class="card-text">HackerRank merupakan sebuah platform yang dapat kita manfaatkan untuk mengasah kemampuan dalam bidang programming. 
            Selain programming, kita juga dapat mempelajari database, security, distributed system, dan sebagainya. Jelas, semua itu berhubungan dengan pemrograman.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="cses-homepage.php"><img class="card-img-top" src="images/cses.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="cses-homepage.php">CSES</a>
            </h4>
            <p class="card-text">Semua orang ingin membuat sistem evaluasi kode mereka sendiri dan menambahkan beberapa fitur unik yang hilang dari sistem lain. 
            Sejak 2013, CSES telah digunakan untuk menyelenggarakan beberapa kursus dan kontes pemrograman di Finlandia.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="spoj-homepage.php"><img class="card-img-top" src="images/spoj.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="spoj-homepage.php">SPOJ</a>
            </h4>
            <p class="card-text">Sphere Online Judge atau SPOJ adalah sebuah situs internet yang menyediakan 
            ribuan soal untuk dipecahkan melalui sebuah program dan bertindak sebagai penilai program tersebut.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="olymp-homepage.php"><img class="card-img-top" src="images/e-olymp.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="olymp-homepage.php">e-Olymp</a>
            </h4>
            <p class="card-text">Sistem E-Olimp adalah sistem untuk kontes dan kompetisi jarak jauh tentang pemrograman olahraga. 
            Proyek ini dibuat dalam Program Negara "Teknologi informasi dan komunikasi dalam pendidikan dan sains tahun 2006-2010, Universitas Negeri Zhytomyr dinamai Ivan Franko.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="other-homepage.php"><img class="card-img-top" src="images/other.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="other-homepage.php">Other</a>
            </h4>
            <p class="card-text">Sistem Online Judge lain atau program-program lain yang telah dikerjakan</p>
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