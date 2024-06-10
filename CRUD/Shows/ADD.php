<?php

include('../../include/db_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $movieID = $_POST['id'];
    $hall = $_POST['room'];
    $date = $_POST['date'];
    $selectedTime = $_POST['time'];
    $price = $_POST['price'];

    $sql_hall = "SELECT * FROM Hall WHERE Hall_ID = '$hall'";
    if($result_hall = mysqli_query($conn, $sql_hall)){
        $capacity = mysqli_fetch_assoc($result_hall)['Capacity'];
    }
    foreach($selectedTime as $time) {
        $sql = "INSERT INTO Shows (Movie_ID,Start_Time,Date,Hall_ID,Price,Available)
        VALUES ('$movieID','$time', '$date','$hall',$price,$capacity)"; 
        mysqli_query( $conn , $sql);  
    }

    header("location: ../../movieupdate.php?mid=$movieID&movieEdit=");
    exit;
}

mysqli_close( $conn );

?>