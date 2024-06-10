<?php
    include("include/db_connection.php");
    include('CRUD/Movie/ADD.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/add-movie.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Header Container with Logo, Search, and User Info -->
        <?php include 'include/header.php' ?>
        <hr>

    </header>
    <main>
        <!-- Movie List Column -->
        <?php include 'include/movieList.php' ?>
        <div class="main-content">
            <h3><a href="admin_dashboard.php">Dashboard</a> | Add Movie</h3>
            <div class="sub-container"  id="form-container">
                <div id="movie-image-container" style="display:none;">
                    <i class="fa-solid fa-x close" onclick="closePoster()"></i>
                    <img id="movie-image" src="module/poster6.jpeg" alt="Poster Image" onerror="handleImageError()">
                </div>
                <form action="addMovie.php" id="add-movie-form" method="post" class="admin-form">
                    <div class="form-group block">
                        <label for="title" >Title: <span style="color: red;">*</span></label>
                        <input type="text" name="title" id="title" placeholder="Movie Name" maxlength="50" required>
                    </div>
                    <div class="form-group block">
                        <label for="poster-name">Movie Poster Name: <span style="color: red;">*</span></label>
                        <input type="text" name="posterName" id="poster-name" placeholder="poster.jpeg" maxlength="50" required>
                        <div style="text-align: right;"><button type="button" id="poster-check-btn">Check</button></div>
                    </div>
                    <div class="form-group block">
                        <label for="director">Director: </label>
                        <input type="text" name="director" id="director" maxlength="40" placeholder="Edward">
                    </div>
                    <div class="form-group">
                        <label for="rating" class="bold">Rating:</label>
                        <select name="rating" id="rating">
                            <option value="" selected>none</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label for="duration" class="bold">Duration (minutes):</label>
                        <input type="number" name="duration" id="duration" min="0" max="240" step="1" placeholder="minutes">
                    </div>
                    <div class="form-group">
                        <label for="description" class="bold">Description: <span style="color: red;">*</span></label>
                        <textarea name="description" id="description"  rows="6" placeholder="Enter movie description... (Word limit - 500)" maxlength="500" required></textarea>
                    </div>
                    <div class="form-group">
                        <p>Movie Language: <span style="color: red;">*</span></p>
                        <input type="radio" name="language" id="english" value="English" required>
                        <label for="english">English</label><br>
                        <input type="radio" name="language" id="sinhale" value="Sinhale">
                        <label for="sinhale">Sinhale</label><br>
                        <input type="radio" name="language" id="tamil" value="Tamil">
                        <label for="tamil">Tamil</label><br>
                        <input type="radio" name="language" id="hindi" value="Hindi">
                        <label for="hindi">Hindi</label><br>
                        <input type="radio" name="language" id="malayalem" value="Malayalem">
                        <label for="malayalem">Malayalem</label>
                    </div>
                    <div class="form-group">
                        <p>Movie Status: <span style="color: red;">*</span></p>
                        <input type="radio" name="status" id="ongoing" value="Ongoing" required>
                        <label for="ongoing">Ongoing</label>
                        <input type="radio" name="status" id="upcoming" value="Upcoming">
                        <label for="upcoming">Upcoming</label>
                    </div>
                    <div class="form-group">
                        <p>Movie Genre: <span style="color: red;">*</span></p>
                        <input type="checkbox" name="genre[]" id="action" value="Action">
                        <label for="action">Action</label><br>
                        <input type="checkbox" name="genre[]" id="comedy" value="Comedy">
                        <label for="comedy">Comedy</label><br>
                        <input type="checkbox" name="genre[]" id="romantic" value="Romantic">
                        <label for="romantic">Romantic</label><br>
                        <input type="checkbox" name="genre[]" id="thriller" value="Thriller">
                        <label for="thriller">Thriller</label><br>
                        <input type="checkbox" name="genre[]" id="sci-fi" value="Sci-fi">
                        <label for="sci-fi">Sci-fi</label><br>
                        <input type="checkbox" name="genre[]" id="horror" value="Horror">
                        <label for="horror">Horror</label><br>
                        <input type="checkbox" name="genre[]" id="fantasy" value="Fantasy">
                        <label for="fantasy">Fantasy</label><br>
                        <input type="checkbox" name="genre[]" id="drama" value="Drama">
                        <label for="drama">Drama</label><br>
                        <input type="checkbox" name="genre[]" id="crime" value="Crime">
                        <label for="crime">Crime</label><br>
                        <input type="checkbox" name="genre[]" id="other" value="other">
                        <label for="other">Other</label>
                    </div>
                    <div class="form-group">
                        <div id="cast-info">
                            <p>Movie Casts: </p>
                            <div class="cast-info">
                                <div class="cast-inputs">
                                    <span class="block">
                                        <input type="text" name="castName[]" placeholder="Actor Name" maxlength="30" required>
                                        <input type="text" name="castPic[]" class="cast-dp-name" maxlength="30" placeholder="Profile Pic Name" required>
                                    </span>
                                    <span id="cast-pic">
                                        <img src="module/system/profile.jpg" alt="Actor dp   .">
                                    </span>
                                </div>
                                <div class="cast-btns">
                                    <button type="button" class="verify-btn">Verify Pic</button>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;"><button type="button" id="addCast-btn">Add More</button></div>
                    </div>
                    <div class="form-group" id="showtime"></div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include 'include/footer.php' ?>
    <script src="javascript/addMovie.js"></script>
</body>
</html>
<?php
    mysqli_close($conn);
?>