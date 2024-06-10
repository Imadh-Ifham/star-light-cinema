<?php include('CRUD/Inquiry/ADD.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
  

<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>CONTACT US</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
    <main>

        <div class="main-text">
            <h1>Contact Us</h1>
        </div>
        <form action="contact.php" method="post">
            <label for="message">Message<span class="required">*</span></label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message..." maxlength="250" required></textarea>
            <input type="submit" value="Submit">         
        </form>
                
    </main>

    <!-- Footer Section -->
    <?php include "include/footer.php" ?>
    <script src="javascript/contact.js"></script>
</body>
</html>
<?php mysqli_close($conn);?> 