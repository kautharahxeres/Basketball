<?php
    $mysql_host='localhost';
    $mysql_user='root' ;
    $mysql_password='';
    $database='Basketball';

    $connect = mysqli_connect( $mysql_host,$mysql_user,$mysql_password,$database); 
    if($connect) {
        echo"connection successfully to database"; 
    }
    else{"connection to database failed";
    }
?>