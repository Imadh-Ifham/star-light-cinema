<?php
include("include/accessRestrict.php");
include("include/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/adminDash.css">
    <script src="https://kit.fontawesome.com/bdfd35405d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header Section -->
    <header>
        <!-- Header Container with Logo, Search, and User Info -->
        <?php include 'include/header.php' ?>

        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>Admin Dashboard</h2>
            <?php include 'include/navAdmin.php' ?>
            <span></span>
        </nav>

    </header>

    <main>
        
        <!-- Movie Information Displayed on Homepage -->
        <div class="movie-stat">
            <p>Total No of Movies <span id="totalMovies"></span></p>
            <p>Now Showing <span id="playingMovies"></span></p>
            <p>Upcoming <span id="upcomingMovies"></span></p>
        </div>

        <section id="movie-container">
            <span>
                <h3 class="heading">Movies</h3>
                <button type="button" id="add-movie-btn">Add Movie</button>
            </span>
            <div class="movies">
                <?php include 'CRUD/Movie/RETRIEVE_admin.php' ?>
            </div>

        </section>

        <section id="poster-container">

            <h3 class="heading">Poster</h3>

            <div>
                <!-- Movie promotion poster Slider -->
                <?php include "include/poster-slider.php"?>
                <div class="posters">
                    <?php include('include/adminPoster.php') ?>
                </div>
            </div>
            <?php include('include/editPoster.php') ?>
            
        </section>
    </main>

    <!-- Footer Section -->
    <?php include 'include/footer.php' ?>
    <script src="javascript/admin.js"></script>
</body>
</html>

<?php
    mysqli_close( $conn );
?>