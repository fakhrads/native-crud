<?php
    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "latihan";

    $conn = mysqli_connect(
        $host,
        $username,
        $password,
        $db
    );

    if(!$conn){
        echo "Database Error!";
    }
?>