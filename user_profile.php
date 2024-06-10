<?php 
    include("include/db_connection.php");
    include("CRUD/User/UPDATE.php");
    include("CRUD/User/DELETE.php");
    

    if(isset($_POST['action'])){
        session_start();
        $_SESSION = array();
        session_destroy();

        header('location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/user_profile.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>PROFILE</h2>
            <?php include 'include/navHome.php' ?>
            <span>
                <?php 
                if(isset($_SESSION[ 'role' ]) && $_SESSION[ 'role' ] == "manager"){
                    echo "<a href='add_admin.php'><button type='button' id='admin-btn'>Add Admin</button></a>";
                }
                ?>
                <form action="user_profile.php" method="POST">
                    <button type="submit" name="action" value="logout" class="logout-btn">Log Out</button>
                </form>
                
            </span>
        </nav>
    </header>
    
    <main>
        <div class="container">
        
            <div class="profile-info">
                <h1>Personal Info</h1>
                <hr>
                <?php
                echo "<h2> First Name: </h2>
                    <p>{$_SESSION['first_name']}</p>

                    <h2> Last Name: </h2>
                    <p>{$_SESSION['last_name']} </p>

                    <h2> City: </h2>
                    <p>{$_SESSION['city']} </p>

                    <h2> Email: </h2>
                    <p>{$_SESSION['email']} </p>";
                ?>      
                    
            </div>

                <button id="editbutton" onclick="editinfo()">Edit</button>
                <button id="editpasswordbutton" onclick="editpassword()">Edit Password</button>   


                <!--delete button-->
                <form action="" method="post">
                    <input id="editbutton" type="submit" name="deleteaccount" value="Delete Account">
                </form>

             <!--update form-->
            <form action="#" class="edit-form" method="post">
                <input id="editbutton" type="submit" name="update" value="Update">

                <div class="input-field">
                    <label for="editfName"><strong>First name:</strong></label><br>
                    <input type="text" id="editfName" name="editfName" placeholder="Update first name" ><br>
                </div>
                        
                <div class="input-field">
                    <label for="editlName"><strong>Last name:</strong></label><br>
                    <input type="text" id="editlName" name="editlName" placeholder="Update last name" ><br>
                </div>
                   
                <div class="input-field">
                    <label for="editcity"><strong>City:</strong></label><br>
                    <input type="text" id="editcity" name="editcity" placeholder="Update city" ><br>
                </div>
                
                <div class="input-field">
                    <label for="editemail"><strong>Email:</strong></label><br>
                    <input type="email" id="editemail" name="editemail" placeholder="Update email"><br>
                </div>
  
                <div class="input-field">
                    <label for="editdob"><strong>Birthday:</strong></label><br>
                    <input type="date" id="editdob" name="editdob" placeholder="Update DOB"><br>
                </div>
                
            </form>
             <!--password form-->
            <form action="" class="passwordform" method="post">

                <input id="editbutton" type="submit" name="updatepassword" value="Update">

                    <div class="input-field">
                        <label for="oldpassword"><strong>Old Password:</strong></label><br>
                        <input type="password" id="oldpassword" name="oldpassword" placeholder="Enter old password"><br>
                    </div>

                    <div class="input-field">
                        <label for="editpassword"><strong>Password:</strong></label><br>
                        <input type="password" id="editpassword" name="editpassword" placeholder="Update Password"><br>
                    </div>

                    <div class="input-field">
                        <label for="confirmpassword"><strong>Confirm Password:</strong></label><br>
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password"><br>
                    </div>
                    <p id="passwordMatchMessage"></p>

            </form>
        </div>

    </main>

    <?php include "include/footer.php" ?>
    <script src="javascript/user_profile.js"></script>
    
</body>
</html>
<?php
    mysqli_close($conn);
?>