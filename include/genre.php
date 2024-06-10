<?php
    // Genre.php - class for genre objects in the database
    $sql_genre = "SELECT * from Movie_Genre WHERE Movie_ID = '$movieID'";
    $genreHTML = "";
    $result3 = mysqli_query( $conn ,$sql_genre );
    $totalRows2 = mysqli_num_rows( $result3 );
    $j=0;
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $genreHTML .= $row3["Genre"];
        $j++ ;
        if ( $j < $totalRows2 ){
            $genreHTML .= ", ";
        }
    }
?>