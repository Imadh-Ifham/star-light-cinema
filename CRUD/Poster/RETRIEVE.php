<?php

$sql_poster = "SELECT * FROM  poster WHERE Movie_ID='$movieID'";
$result_poster=mysqli_query($conn,$sql_poster);
$posterName = "";
if(mysqli_num_rows($result_poster) >0){
    $row_poster=mysqli_fetch_assoc($result_poster);
    $posterName=$row_poster['Name'];
}



?>