<?php

include('../../include/db_connection.php');
echo "Pass1";

if(isset($_POST['form-detail'])){
    $movieID = $_POST['id'];
    $title = $_POST['title'];
    $lang = $_POST['language'];
    $status = $_POST['status'];
    echo "Pass2";

    $sql = "UPDATE Movie 
            SET Title = '$title', language = '$lang', Movie_Status = '$status'
            WHERE MID = '$movieID'";
    
    mysqli_query($conn,$sql);
    header("location: ../../movieUpdate.php?mid=$movieID&movieEdit=");
}
echo "pass3";

if(isset($_POST['desc'])){
    echo "pass4";
    $movieID = $_POST['id'];
    $desc = $_POST['desc'];
    echo "pass5";
    $sql = "UPDATE Movie 
            SET Description = '$desc'
            WHERE MID = '$movieID'";
    
    mysqli_query($conn,$sql);
    header("location: ../../movieUpdate.php?mid=$movieID&movieEdit=");
}

mysqli_close( $conn );

?>