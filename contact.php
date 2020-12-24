<?php
    session_start();
    include 'conn.php';

    /*
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);
    */
    if (isset($_GET['id']))
    {
      $id = $_GET['id'];
      $sql = "SELECT * FROM users WHERE `id`= $id";
      // " ... WHERE PartNumber = '" . mysqli_escape_string($conn,$partid) . "';"
  
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

      mysqli_close($conn);
    }
    
    $pageTitle = 'PB | Contact';
    echo ("<title> $pageTitle </title>");

    include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact
        <small><small><small>Contact Office</small></small></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.63459595883!2d112.7927366145035!3d-7.282350673590439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sInstitut%20Teknologi%20Sepuluh%20Nopember!5e0!3m2!1sid!2sid!4v1608636566239!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <!-- <iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Contact Details</h3>
                <p>
                Jl. Teknik Kimia, Keputih, Kec. Sukolilo,
                <br>Kota SBY, Jawa Timur 60111
                <br>
                </p>
                <p>
                <abbr title="Phone">P</abbr>: (123) 456-7890
                </p>
                <p>
                <abbr title="Email">E</abbr>:
                <a href="mailto:name@example.com">Office_Email@gmail.com
                </a>
                </p>
                <p>
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php
    include 'header 2.php';
    include 'footer.php'
?>    