<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "pusing-bareng";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("Tidak bisa connect");
    }

?>