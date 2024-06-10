<?php 
include("include/accessRestrict.php");
include("CRUD/User/ADD_admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/add_admin.css">
    
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>ADMIN REGISTRATION</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
    <main>
        <div class="main-content">
            <h1>Add Admin Account</h1><br/>
            
            <!--Form to add admin account details-->
            <form action="" method="post" class="myForm">

                <div class="admin-Input">
                    <label for="firstname">First Name: </label><br />
                    <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" required><br />
                </div>
                
                <div class="admin-Input">
                    <label for="lastname">Last Name: </label><br />
                    <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" required><br />
                </div>

                <div class="admin-Input">
                    <label for="email">Email: </label><br />
                    <input type="text" id="email" name="email" placeholder="Enter Email" required><br />
                </div>

                <div class="column">
                <div class="admin-Input">
                    <label for="address">City: </label><br />
                    <input type="text" id="address" name="city" placeholder="Enter City" required><br />
                </div>

                <div class="admin-Input">
                    <label for="DOB">Date Of Birth: </label><br />
                    <input type="date" id="DOB" name="dob" placeholder="Enter Date Of Birth"><br />
                  </div>
                </div>

                <div class="admin-Input">
                    <label for="role">Role: </label><br />
                    <input type="radio" id="role1" name="role" value="manager" required>
                    <label for="role1">Manager</label><br />
                    <input type="radio" id="role2" name="role" value="admin">
                    <label for="role2">Admin</label><br />
                </div>

                
                <div class="admin-Input">
                    <label for="password">Password: </label><br />
                    <input type="password" id="password" name="password" placeholder="Enter Password" required><br />
                </div>

                <div class="admin-Input">
                    <label for="confirm-password">Confirm Password: </label><br />
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required><br />
                </div>

                <p id="passwordMatchMessage"></p>

                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    <script src="javascript/add_admin.js"></script>
</body>
</html>