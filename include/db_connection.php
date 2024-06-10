<?php
    $db_server = "localhost";
    $db_username = "root";  // MySQL
    $db_password = "";
    $db_name = "star-light";  //database name
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name );
    }catch(mysqli_sql_exception){
        echo "You are not connected<br>";
    }
?>