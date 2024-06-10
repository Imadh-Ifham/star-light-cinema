<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Header Container with Logo, Search, and User Info -->
<div class="head-container">
    <!-- Logo -->
    <img id="logo" src="module/system/logo.png" alt="Logo">

    <!-- Search Form -->
    <form class="search-container" action="search_movie.php" method="GET">
        <input type="search" name="movie_search" id="movie_search" placeholder="Search for Movies">
        <button type="submit">Search</button>
    </form>

    <!-- User Info -->
    <?php
        if(isset($_SESSION['id'])) {
            $username = $_SESSION['first_name'] . " " . $_SESSION[ 'last_name' ];
            echo "<span class='user-info' id='user-info'>
            <label for='profile-pic'>
                <h4 id='user-name'>$username</h4>
            </label>
            <a href='user_profile.php'><img id='profile-pic' src='module/system/profile.jpg' alt='profile-pic'></a>
        </span>";
        } else {
            echo "<span class='login-signup' id='login-signup'>
            <a href='login.php'><button type='button' id='login-btn'>Login</button></a>
        </span>";
        }
    ?>
</div>