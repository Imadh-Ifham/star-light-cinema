<?php

include("include/db_connection.php");
include("CRUD/Movie/RETRIEVE_home.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>HOME</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <!-- Movie promotion poster Slider -->
        <?php include "include/poster-slider.php"?>

        <!-- Now showing Movie section start -->
        <div class="movie-gallery-container">
            <span>
                <h4>Now Showing Movies</h4>
                <!-- Dropdown Section -->
                <span class="filter">

                    <ul>
                        <!-- Genre Dropdown -->
                        <li>
                            <a href="#">Genre <i class="fa-solid fa-caret-down"></i></a>
                            <?php include('include/genreDropdown.php')?>
                        </li>
                        <!-- Language Dropdown -->
                        <li>
                            <a href="#">Language <i class="fa-solid fa-caret-down"></i></a>
                            <?php include('include/languageDropdown.php')?>
                        </li>
                    </ul>
                </span>
            </span>
            <div class="movie-gallery" id="now-showing-gallery">
                <?php echo $ongoingMovieHTML ?>
            </div>
        </div>
        <div class="movie-gallery-container">
            <span>
                <h4>Upcoming Movies</h4>
            </span>
            <div class="movie-gallery" id="upcoming-gallery">
                <?php echo $nowShowingHTML ?>
            </div>
        </div>

        <div class="demo"></div>
    </main>

    <!-- Footer Section -->
    <?php include "include/footer.php" ?>
    <script src="javascript/home.js"></script>
</body>

</html>