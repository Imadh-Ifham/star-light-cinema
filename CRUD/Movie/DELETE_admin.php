<?php
    include('../../include/db_connection.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['movie_id'])){
            $movieID =  $_POST['movie_id'];
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Disable foreign key checks
            mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");

            // Delete from Movie table
            mysqli_query($conn, "DELETE FROM Movie WHERE MID = " . $movieID);


            // Delete from other related tables
            mysqli_query($conn, "DELETE FROM Poster WHERE Movie_ID = " . $movieID);
            mysqli_query($conn, "DELETE FROM Movie_Genre WHERE Movie_ID = " . $movieID);
            mysqli_query($conn, "DELETE FROM Movie_Cast WHERE Movie_ID = " . $movieID);
            mysqli_query($conn, "DELETE FROM Shows WHERE Movie_ID = " . $movieID);
    
            // Enable foreign key checks
            mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");
            
            // Redirect to the original page
            header("Location: ../../admin_dashboard.php");
            exit(); // Ensure that no other content is sent after redirection
        }
    }
    mysqli_close( $conn );
?>
