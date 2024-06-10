<?php

include('include/db_connection.php');
include('function/getDateFunction.php');
include('function/showFunction.php');

date_default_timezone_set('Asia/Colombo');
$current_time = date("H:i:s");
$h1 = 'H-1';
$h2 = 'H-2';
$h3 = 'H-3';


function show($movieID, $hallID, $currentDate, $conn){
    $sql = "SELECT * FROM Shows WHERE Movie_ID = $movieID AND Date >= '$currentDate' AND Hall_ID = '$hallID' ORDER BY Date,Start_Time";
    $showTime = "";

    $resultShowTime = mysqli_query($conn,$sql);


    if(mysqli_num_rows($resultShowTime)>0){
        while ($row=mysqli_fetch_assoc($resultShowTime))  {
            $start_time = $row['Start_Time'];
            $date = $row['Date'];
            $SID = $row['Show_ID'];
            $showTime .= "<div class='showtime'>
                            <span>$date - $start_time</span>
                            <form action='CRUD/Shows/DELETE.php' method='POST'>
                                <input type='hidden' name='movieID' value='$movieID'>
                                <input type='hidden' name='showID' value='$SID'>
                                <button type='submit' name='delete'><i class='fa-solid fa-trash-can'></i></button>
                            </form>
                        </div>";
        }
    }else{
        $showTime = "No Show Time Available";
    }
    return  $showTime;
}
$showTimeVega = show($movieID,$h1,$date1,$conn);
$showTimeSerius  = show($movieID,$h2,$date1,$conn);
$showTimePolaris  = show($movieID,$h3,$date1,$conn);



$showtimeContainer = "
                        <div id='day1' class='time'>
                            <p><b>Vega Hall</b></p>
                            <div id='showHall1'>" .
                            showtime($movieID,$date1,$date1,$h1,$conn) . " 
                            </div>
                            <p><b>Sirius Hall</b></p>
                            <div id='showHall2'>" .
                            showtime($movieID,$date1,$date1,$h2,$conn) . " 
                            </div>
                            <p><b>Polaris Hall(3D)</b></p>
                            <div id='showHall3'>" .
                            showtime($movieID,$date1,$date1,$h3,$conn) . " 
                            </div>
                        </div>
                        <div id='day2' class='time hide'>
                            <p><b>Vega Hall</b></p>
                            <div id='showHall1'>" .
                            showtime($movieID,$date2,$date1,$h1,$conn) . " 
                            </div>
                            <p><b>Sirius Hall</b></p>
                            <div id='showHall2'>" .
                            showtime($movieID,$date2,$date1,$h2,$conn) . " 
                            </div>
                            <p><b>Polaris Hall(3D)</b></p>
                            <div id='showHall3'>" .
                            showtime($movieID,$date2,$date1,$h3,$conn) . " 
                            </div>
                        </div>
                        <div id='day3' class='time hide'>
                            <p><b>Vega Hall</b></p>
                            <div id='showHall1'>" .
                            showtime($movieID,$date3,$date1,$h1,$conn) . " 
                            </div>
                            <p><b>Sirius Hall</b></p>
                            <div id='showHall2'>" .
                            showtime($movieID,$date3,$date1,$h2,$conn) . " 
                            </div>
                            <p><b>Polaris Hall(3D)</b></p>
                            <div id='showHall3'>" .
                            showtime($movieID,$date3,$date1,$h3,$conn) . " 
                            </div>
                        </div>
";


?>