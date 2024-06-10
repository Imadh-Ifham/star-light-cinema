<?php

function showtime($ID, $date,$currentDate, $hall_ID, $conn) {
    date_default_timezone_set('Asia/Colombo');
    $current_time = date("H:i:s");
    if($date>$currentDate){
        $sql = "SELECT * 
            FROM Shows 
            WHERE Movie_ID='$ID' 
            AND Date='$date' 
            AND Hall_ID='$hall_ID' 
            ORDER BY Start_Time ASC";
    } else {
        $sql = "SELECT * 
            FROM Shows 
            WHERE Movie_ID='$ID' 
            AND Date='$date' 
            AND Start_Time > '$current_time' 
            AND Hall_ID='$hall_ID' 
            ORDER BY Start_Time ASC";
    }
    
    $result = mysqli_query($conn, $sql );  //run the sql statement to get data from database

    $array = array();
    $showtimeHTML = "";
    if ($result->num_rows > 0) {   //if there is a result
        
        while ( $row = $result->fetch_assoc() ) {
            $array[$row[ 'Show_ID']] = $row['Start_Time'];
        }
        foreach ($array as $key => $value) {
            $showtimeHTML .= "<form action='movieDetail.php?mid=$ID&book-ticket=Book+Ticket' method='POST'>
            <input type='hidden' name='showID' value='$key'/>
            <button type='submit' name='confirm' class='btn btn-primary'>$value</button>
        </form>";
        }

    } else {
        $showtimeHTML = 'No Show Time Available';
    }
    return  $showtimeHTML;
};
?>