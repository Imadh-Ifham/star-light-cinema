<?php
   include ("include/db_connection.php"); 
   //Start session
   session_start();

   if(isset($_POST['deleteaccount'])){
     

      $sql_delete_user = "DELETE FROM users WHERE UID = '{$_SESSION['id']}';";

      if(mysqli_query($conn,$sql_delete_user)){
         //Destroy sesion
         session_destroy();
          echo "Deleted successfully.";
          header("Location: index.php");
          exit;
       }
       else{
          echo "Error";
       }
     
   }
    
?>