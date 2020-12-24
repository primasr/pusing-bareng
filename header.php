<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Custom styles untuk contect/comments -->
    <link href="comments/vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
    <link href="comments/style.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="comments/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="comments/vendor/emoji-picker/lib/js/config.js"></script>
    <script src="comments/vendor/emoji-picker/lib/js/util.js"></script>
    <script src="comments/vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="comments/vendor/emoji-picker/lib/js/emoji-picker.js"></script>

    <!-- <title> Pusing Bareng </title> -->

</head>

<body style="padding-top: 0px;">

        <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="images/LOGO PWEB-KU.png" alt="Logo Pweb-ku" width="42" height="42" style="vertical-align:middle">
                Pusing Bareng 
            </div>
            <div class="list-group list-group-flush">
                <a href="tlx-homepage-1.php" class="list-group-item list-group-item-action bg-light">TLX TOKI</a>
                <a href="hackerrank-homepage.php" class="list-group-item list-group-item-action bg-light">HackerRank</a>
                <a href="cses-homepage.php" class="list-group-item list-group-item-action bg-light">CSES</a>
                <a href="spoj-homepage.php" class="list-group-item list-group-item-action bg-light">SPOJ</a>
                <a href="vjudge-homepage.php" class="list-group-item list-group-item-action bg-light">Virtual Judge</a>
                <a href="other-homepage.php" class="list-group-item list-group-item-action bg-light">Other</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Coding Platform</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <?php if ($_SESSION) : ?>

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION['username']?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!-- <p class="dropdown-item"><?php echo $_GET['bio']?></p> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="profile.php">Profile Slur</a>
                                <a class="dropdown-item" href="update.php">Update Slur</a>
                                <a class="dropdown-item" href="logout.php">Logout Slur</a>
                            </div>
                        </li>

                    <?php else: ?>
                        <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                            <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    <?php endif; ?>


                </ul>
            </div>
        </nav>