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
?>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('images/kaca-pembesar.png');
  background-position: 10px 10px;
  background-size: 23px 23px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 14px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 14px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

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
          <img class="card-img-top" src="https://simplesnippets.tech/wp-content/uploads/2018/03/hello-world-program-in-c.jpg" alt="Hello World!">
          <div class="card-body">
            <h2 class="card-title">Hello World</h2>
            <p class="card-text">Program Pertama: Menuliskan Hello World!</p>
            <a href="tlx-hello-world.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="https://2.bp.blogspot.com/-hE4VsLS1KIY/WwFbWe1t44I/AAAAAAAAB_U/XEdBkQ8UYYsS-i14LrFnqAkIrcpOnEEEACLcBGAs/s400/for1.PNG" alt="Caesar Chipper">
          <div class="card-body">
            <h2 class="card-title">Caesar Chipper</h2>
            <p class="card-text">Membuat program Caesar Chipper</p>
            <a href="tlx-caesar-chipper.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
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
          include 'sidewidget.php';
      ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    