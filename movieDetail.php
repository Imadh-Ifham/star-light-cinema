<?php
    include('include/db_connection.php');
    if(isset($_GET['book-ticket'])){
        $movieID = $_GET['mid'];
        include('CRUD/Movie/RETRIEVE_detail.php');
        include('CRUD/Shows/RETRIEVE.php');
        include('CRUD/Poster/RETRIEVE.php');
        include('include/starRate.php');
        include('include/genre.php');
        include('include/cast.php');
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/movieDetail.css">
    <script src="https://kit.fontawesome.com/bdfd35405d.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>Book Ticket</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="container">
        <?php echo "
            <img id='poster' src='module/$posterName' alt='Movie poster'>
            <div class='block-A'>
                <div class='movie-info'>
                    <h1>$title - ($lang)</h1>
                    <div class='rating'>$starRate</div>
                    <p>$genreHTML</p><br>
                    <p><b>Director: </b> $director</p>
                    <p><b>Casting: </b> $actorHTML</p>
                    <p><b>Runtime:</b> $min min</p>
                    <p>$description</p>
                </div>";
                if ($status == 'Ongoing') {
                    echo "<div class='booking-container'>";
                    include('include/bookingContainer.php');
                    echo "</div>";
                }
        ?> 
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include "include/footer.php" ?>
    <script src="javascript/movieDetail.js"></script>
</body>
</html>
<?php
    mysqli_close( $conn );
?>