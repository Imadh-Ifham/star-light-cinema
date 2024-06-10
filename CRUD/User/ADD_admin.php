<?php
      include ("include/db_connection.php"); 

      if($_SERVER["REQUEST_METHOD"]== "POST"){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $confirmpassword = $_POST['confirm-password'];
        

        $sql_admin = "INSERT INTO users(First_Name,Last_Name,Password,email,role,DOB,city)
        VALUES('$firstname','$lastname','$hash','$email','$role','$dob','$city')";

        if ( mysqli_query($conn, $sql_admin) ) {
          echo "<script>
                window.onload = function() {
                  alert('Admin added successfully!');
                  window.history.back();
                };
                </script>";
        }
        
      }
?>