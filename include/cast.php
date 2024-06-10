<?php
    // Cast data - class
    $sql_cast = "SELECT * from Movie_Cast WHERE Movie_ID = '$movieID'";
    $actorHTML = "";
    $result2 = mysqli_query( $conn ,$sql_cast );
    $totalRows1 = mysqli_num_rows($result2);
    $i = 0;
    while ( $row2 = mysqli_fetch_assoc($result2) ) {
        $actorHTML .= $row2['Actor_name'];
        $i++;
        if ( $i < $totalRows1) {
            $actorHTML .= ", ";
        }
    }
?>