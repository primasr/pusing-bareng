<?php
    
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "pusing-bareng";

    $servername = "127.0.0.1:3306";
    $username = "u652632623_prima_db";
    $password = "Tekfo-eclair02";
    $db = "u652632623_prima_db";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("Tidak bisa connect");
    }

?>