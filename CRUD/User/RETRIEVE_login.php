<?php
include('include/db_connection.php');
session_start();

$sql_user = "SELECT * FROM Users";
$result_user = mysqli_query($conn, $sql_user);  //run the query

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginEmail = $_POST['email'];
    $loginPassword = $_POST['password'];
    $valid = false;
    while ($row = mysqli_fetch_assoc($result_user)) {     //fetch values from each row of the result set
        if (strcasecmp($loginEmail, $row['email']) === 0 && password_verify($loginPassword, $row['Password'])) {   //checking if user is valid or not
            $_SESSION[ 'id' ] = $row['UID'];
            $_SESSION[ 'first_name' ] = $row['First_Name'];
            $_SESSION[ 'last_name' ] = $row['Last_Name'];
            $_SESSION[ 'role' ] = $row['role'];
            $_SESSION[ 'city' ] = $row['CITY'];
            $_SESSION[ 'email' ] = $row['email'];
            if ($_SESSION[ 'role' ] == "admin" || $_SESSION[ 'role' ] == "manager" ) {
                header('Location: admin_dashboard.php');   //redirect to admin dashboard page if user is an admin
                exit; // Add exit to stop further execution
            } else {
                header('Location: index.php');   //redirect to home page if user is not admin
                exit; // Add exit to stop further execution
            }
            $valid = true;
        }
    }
    if (!$valid) {
        echo "<script>window.onload = function() { alert('Invalid Credentials!'); }</script>";
    }
}
mysqli_close( $conn );//closing connection
?>
