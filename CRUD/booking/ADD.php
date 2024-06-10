<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $showID = $_POST['showID'];
    $movieID = $_POST['movieID'];
    $count = $_POST['noOfSeats'];
    $existedSeat = $_POST['seat_count'];
    $updatedSeatCount = $existedSeat - $count;

    $sql_show = "UPDATE shows
                 SET Available = $updatedSeatCount
                 WHERE Show_ID = $showID";

    mysqli_query($conn,$sql_show);

    if (isset($_SESSION['id'])) {
        $UID = $_SESSION['id'];
        $sql_booking = "INSERT INTO Booking (Movie_ID,Show_ID,User_ID)
                        VALUE ('$movieID','$showID','$UID')";

        $conn->query($sql_booking);
    }
}

?>