<?php

include('include/db_connection.php');
include('function/runtimeFunction.php');

$SQL_movie = "SELECT * FROM Movie WHERE MID='$movieID'";
$stmt = $conn->query( $SQL_movie );
$row1 = $stmt->fetch_assoc();

$title = $row1['Title'];
$lang = $row1['language'];
$rating = $row1['Rating'];
$director = $row1['Director'];
$duration = $row1['Duration'];
$min = timeToMinutes($duration);
$description = $row1['Description'];
$status = $row1['Movie_Status'];

?>
