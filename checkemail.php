<?php
include("conn.php");

$sql = "SELECT email FROM users WHERE email = " .$_POST['email'];
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);

if (mysqli_num_rows > 0) {
    echo "exist";
}else echo 'notexist';
?>