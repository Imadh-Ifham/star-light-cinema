<?php 

if(isset($_POST['confirm'])){
    $showID = $_POST['showID'];
    $sql_show = "SELECT * FROM Shows WHERE show_ID = $showID";
    $result_show = mysqli_query($conn,$sql_show);
    $row11=mysqli_fetch_assoc($result_show);
    $hallID = $row11['Hall_ID'];
    $selectedTime = $row11['Start_Time'];
    $selectedDate = $row11['Date'];
    $price = $row11['Price'];
    $seat = $row11['Available'];
    $movieID = $row11['Movie_ID'];

    if ($hallID == 'H-1') {
        $selectedHall = "Vega Hall";
    } else if ($hallID == 'H-2') {
        $selectedHall = "Serius Hall";
    } else {
        $selectedHall = "Polaris Hall (3D)";
    }
    
echo "
    <div class='showtime'>
        <div class='date'>
            <div><b>Date: </b></div>
            <div id='today' class='current'></div>
            <div id='tomorrow' class=''></div>
            <div id='next' class=''></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        $showtimeContainer
    </div>";
    if ($seat > 0) {
        echo "
        <div id='book'>
            <p><b>Book your tickets now!</b></p>
            <br>
            <p>Playing on $selectedDate at $selectedTime</p>
            <p>$selectedHall</p>
            <p>Available Seats : <span id='availability'>$seat</span></p>
            <form action='payment.php' method='POST'>
                <label for='seat'>No of Seats: </label>
                <input type='number' id='seat' name='noOfSeats' value='1' min='1' max='$seat' />
                <input type='hidden' name='showID' value='$showID' />
                <input type='hidden' name='movieID' value='$movieID' />
                <input type='hidden' name='seat_count' value='$seat' />
                <br/><br/>
                <p>Total Price : Rs. <span id='price' initial-price='$price'>$price</span></p><br>
                <button type='submit' class='btn btn-success'>Confirm Booking</button>
            </form>
        </div>";
    } else {
        echo "
        <div id='book'>
            <p><b>Book your tickets now!</b></p>
            <br><br><br>
            <p>All seats are booked. Book another show</p>
        </div>";
    }

}else{
    
echo "
    <div class='showtime'>
        <div class='date'>
            <div><b>Date: </b></div>
            <div id='today' class='current'></div>
            <div id='tomorrow' class=''></div>
            <div id='next' class=''></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        $showtimeContainer
    </div>
    <div id='book'>
        <p><b>Book your tickets now!</b></p>
        <br><br><br>
        <p>Select a date and time first.</p>
    </div>";
}

?>