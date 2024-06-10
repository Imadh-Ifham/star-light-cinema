<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('include/db_connection.php');

if(isset($_POST['message'])){

    if(isset($_SESSION['id'])){

        $message = $_POST['message'];
        $currentDateTime = date("Y-m-d H:i:s");
        $userID = $_SESSION['id'];
    
        $sql = "INSERT INTO Inquiry (message,DateTime,User_ID)
                VALUE ('$message','$currentDateTime','$userID')";
    
        mysqli_query($conn,$sql);
        echo "<script>window.onload = function() {alert('Message sent successfully!');}</script>";
    
    } else {
        echo "<script>window.onload = function() {alert('You are not Registered!');}</script>";
    }
}
?>