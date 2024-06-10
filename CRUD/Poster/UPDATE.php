<?php

include('../../include/db_connection.php');
include('../../function/getDateFunction.php');

if( isset($_POST['posterDone']) ) {
    $posterID = $_POST['posterID'];
    $posterName = $_POST['slidePosterName'];
    $relatedMovie = $_POST['slideMovieName'];

    $sql = "UPDATE poster
            SET Name = '$posterName',
                related_movie = '$relatedMovie',
                Created_Date = '$date1'
            WHERE ID = $posterID";

    if(mysqli_query( $conn ,$sql)){
        header('location: ../../admin_dashboard.php');
        exit;
    } else {
        echo 'Error';
    };   
}

if(isset($_POST['deletePoster'])) {
    $posterID = $_POST['deletePosterID'];

    $sql = "UPDATE poster
            SET Name = 'slc.jpg',
                related_movie = 'Star Light Cinema',
                Created_Date = '$date1'
            WHERE ID = $posterID";

    if(mysqli_query( $conn ,$sql)){
        header('location: ../../admin_dashboard.php');
        exit;
    } else {
        echo 'Error';
    }; 
}
?>
