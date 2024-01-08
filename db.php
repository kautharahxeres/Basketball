<?php
    $connect = mysqli_connect("localhost", "root", "", "Basketball");
    echo("Connection successfull to database");
    if(!$connect){
    die("Connection Error");
    }
?>