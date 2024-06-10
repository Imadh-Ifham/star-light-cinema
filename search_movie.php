<?php
    include('include/db_connection.php');

    if(isset($_GET['movie_search'])) {
        $query = $_GET['movie_search'];
    }
    $sql = "SELECT * 
    FROM movie
    INNER JOIN poster ON movie.MID = poster.Movie_ID
    WHERE LOWER(title) LIKE '%" . strtolower($query) ."%'";

    $result = mysqli_query($conn,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLC Movies</title>
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
            <h2>MOVIE</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
    <main>
        <div class="movie-gallery-container">
            <h4>Search Result</h4>
            <div class="movie-gallery" id="upcoming-gallery">
                <?php 
                    if (mysqli_num_rows($result) >  0) {
                        while ( $row = mysqli_fetch_assoc( $result ) ) {
                            $movie_id = $row['MID'];
                            $posterName = $row['Name'];
                            $movieName = $row['Title'];
                            $status = $row['Movie_Status'];

                            if ($status == "Ongoing"){
                                echo "<div class='movie-group'  id='$movie_id'>
                                <img src='module/$posterName' alt='poster (Refresh the browser)' />
                                <form action='movieDetail.php' method='GET'>
                                    <input type='hidden' name='mid' value='$movie_id'/>
                                    <input type='submit' value='Book Ticket' name='book-ticket' />
                                </form>
                            </div>";
                            } else if ($status == "Upcoming") {
                                echo "<div class='movie-group'  id='$movie_id'>
                                <img src='module/$posterName' alt='poster (Refresh the browser)' />
                                <form action='movieDetail.php' method='GET'>
                                    <input type='hidden' name='mid' value='$movie_id'/>
                                    <input type='submit' value='Movie Detail' name='book-ticket' />
                                </form>
                            </div>";
                            }

                        }
                    } else {
                        echo "No movies found matching your search query.";
                    } ?>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include "include/footer.php" ?>

</body>
</html>
<?php mysqli_close( $conn ) ?>