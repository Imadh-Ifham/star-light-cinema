<?php
   include ("include/db_connection.php"); 
   
   if(isset($_POST['update'])){
      session_start();
      $firstname = $_POST['editfName'];
      $lastname  = $_POST['editlName'];
      $city = $_POST['editcity'];
      $email = $_POST['editemail'];
      $dob = $_POST['editdob'];
   
           
      $sql_update_user = "UPDATE users SET First_Name = '$firstname', Last_Name = '$lastname', CITY = '$city', email = '$email', DOB = '$dob' WHERE UID = '{$_SESSION['id']}'";        
      

         if(mysqli_query($conn,$sql_update_user)){
            echo "Records updated successfully.";
         }
         else{
            echo "Error";
         }
      }
      
     
   if(isset($_POST['updatepassword'])){
      session_start();
      $oldpassword = isset($_POST['oldpassword']) ? $_POST['oldpassword'] : '';
      $password = isset($_POST['editpassword']) ? $_POST['editpassword'] : '';
      $confirmPassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : '';
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $confirmHash = password_hash($password,PASSWORD_DEFAULT);

      $sql = "SELECT * FROM Users WHERE UID = {$_SESSION[ 'id' ]};";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $hashed_password = $row['Password'];  

      $sql_update_password = "UPDATE users SET Password = '$hash';";

      if(password_verify($oldpassword,$hashed_password)){
         if(mysqli_query($conn,$sql_update_password)){
            echo "<script>
                  window.onload = function() {
                  alert('Records updated successfully!');
                  window.history.back();
                  };
                  </script>";
         }
         else{
            echo "Error";
         }
      } else {
         echo "<script>
               window.onload = function() {
               alert('Old Password is incorrect!');
               window.history.back();
               };
               </script>";
      }

      

   }
?>