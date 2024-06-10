<?php

echo "<div id='book'>
    <p><b>Book your tickets now!</b></p>
    <br>
    <p>Playing on Date at time</p>
    <p>Available Seats : <span id='availability'>21</span></p>
    <form action='' method='GET'>
        <label for='seat'>No of Seats: </label>
        <input type='number' id='seat' name='noOfSeats' value='1' min='1' />
        <br/><br/>
        <p>Total Price : Rs. <span id='price'>600</span></p><br>
        <button type='submit' class='btn btn-success'>Confirm Booking</button>
    </form>
</div>"

?>