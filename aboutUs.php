<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/about_us.css">
   
    
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>About Us</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
       <!-- Main Content Section -->
    <main>
    <section class="poster">
            <img src="module\system\aboutUs.jpg" >
        </section>
        <section class="about">
            <h2>ABOUT STAR LIGHT CINEMA</h2><br>
            <p>Star Light Cinema is dedicated to raise the expectations of a movie booking website 
                With our user-friendly platform, you can easily discover new releases and book tickets for your favourite movie.</p>
        </section>
        <section class="vision">
            <h2>VISION</h2><br>
            <p>Our vision is to make online ticket booking a seamless and user-friendly process by using the latest technology and updating our system regularly to make the booking process simple for users.</p>
        </section>
    </main>
    <!-- Footer Section -->
    <?php include "include/footer.php"?>
    
</body>
</html>