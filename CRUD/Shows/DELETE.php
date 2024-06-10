<?php 
include('../../include/db_connection.php');
if (isset( $_POST['delete'])){
    $showID = $_POST['showID'];
    $movieID = $_POST['movieID'];

    $sql_delete = "DELETE FROM Shows WHERE Show_ID = $showID";
    mysqli_query($conn, $sql_delete);

    header( "Location: ../../movieupdate.php?mid=$movieID&movieEdit=" ) ;
    exit;  
}
?>