<?php
include('../../include/db_connection.php');  // Connect to database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql1 = "SELECT * FROM Users";
    $result1 = mysqli_query($conn, $sql1);
    $emailCheck = false;

    while ($row1= mysqli_fetch_assoc($result1)) {
        if ($row1['email'] == $email) {
            $emailCheck = true;
        }
    }

    if ($emailCheck == false) {
        $sql2 = "INSERT INTO Users (First_Name,Last_Name,CITY,email,Password,gender)
                VALUES ('$firstname','$lastname','$city','$email','$hash','$gender')";

        mysqli_query($conn, $sql2);
        header("Location: ../../login.php");
        exit;
    } else {
        echo "<script>alert('email already Exist');</script>";
    }
}
mysqli_close($conn);
