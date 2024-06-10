<?php
include("include/accessRestrict.php");
    if(isset($_GET['movieEdit'])){
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
    <link rel="stylesheet" href="css/movieupdate.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Header Container with Logo, Search, and User Info -->
        <?php include 'include/header.php' ?>

        <!-- Navigation Section -->
        <nav>
            <h2>Movie Detail</h2>
            <!-- Main Navigation Links -->
            <?php include 'include/navAdmin.php' ?>
            <span></span>
        </nav>
    </header>

    <main>
        <div class="top">
            <img class="poster" src="module/<?php echo $posterName ?>" alt="Movie Poster" id="poster">
            <div class="block">
                <div class="block-A">
                    <div id='detail' class=''>
                        <div id="titleBtn"><i class="fa-solid fa-pen-to-square"></i></div>
                    <?php echo"
                        <h2>$title - ($lang)</h2>
                        <div id='star'>$starRate</div>
                        <p>$genreHTML</p><br>
                        <p><b>Director:</b> $director</p>
                        <p><b>Casting:</b> $actorHTML</p>
                        <p><b>Runtime:</b> $min min</p>
                        <p style='color: blue;'><b>$status</b></p>
                    ";?>
                    </div>
                    <form class='hide' id='form-detail' action='CRUD/Movie/UPDATE.php' method='post'>
                        <input type="hidden" name='id' value="<?php echo $movieID ?>">
                        <input type='text' name='title' value='<?php echo $title ?>' placeholder='Title' required><br>
                        <input type='text' name='language' value='<?php echo $lang ?>' placeholder='Language' required><br>
                        <div>
                            <label for="ongoing"><input id="ongoing" type='radio' name='status' value='Ongoing' checked> Ongoing</label>
                            <label for="upcoming"><input id="upcoming" type='radio' name='status' value='Upcoming'> Upcoming</label>
                        </div>
                        <button type="submit" name="form-detail">Done</button>
                    </form>
                </div>
                <div class="block-B">
                    <div id="description" class=''>
                        <div id="descBtn"><i class="fa-solid fa-pen-to-square"></i></div>
                        <p><?php echo $description ?></p>
                    </div>
                    <form class='hide' id="form-desc" action='CRUD/Movie/UPDATE.php' method="post">
                        <input type="hidden" name='id' value="<?php echo $movieID ?>">
                        <textarea name="desc" cols="30" rows="8" placeholder="Describe the Movie...."><?php echo $description ?></textarea><br>
                        <button type="submit" name="desc-submit">Done</button>
                    </form>
                </div>
                
            </div>
        </div>
        <?php 
            if ($status == "Ongoing") {
                include("include/addShowtime.php");
            }
        ?>
    </main>

    <!-- Footer Section -->
    <?php include 'include/footer.php' ?>
    <script src="javascript/movieupdate.js"></script>
</body>
</html>