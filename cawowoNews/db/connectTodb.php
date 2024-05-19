<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cawowo_news";

    $connect = mysqli_connect($host,$user,$pass,$db);

    if(!$connect) {
        die("error database");
    }
?>