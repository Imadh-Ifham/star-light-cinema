<?php

    $sql = "SELECT * 
    FROM movie
    INNER JOIN poster ON movie.MID = poster.Movie_ID";
        
    $result = mysqli_query($conn,$sql);
    
    $ongoingMovieHTML = "";
    $nowShowingHTML = "";

    if (mysqli_num_rows($result) >  0) {

        while ( $row = mysqli_fetch_assoc( $result ) ) {
            $movie_id = $row['MID'];
            $posterName = $row['Name'];
            $movieName = $row['Title'];
            $status = $row['Movie_Status'];

            if ($status == "Ongoing"){
                $ongoingMovieHTML .= "<div class='movie-group'  id='$movie_id'>
                <img src='module/$posterName' alt='poster (Refresh the browser)' />
                <form action='movieDetail.php' method='GET'>
                    <input type='hidden' name='mid' value='$movie_id'/>
                    <input type='submit' value='Book Ticket' name='book-ticket' />
                </form>
            </div>";
            } else if ($status == "Upcoming") {
                $nowShowingHTML .= "<div class='movie-group'  id='$movie_id'>
                <img src='module/$posterName' alt='poster (Refresh the browser)' />
                <form action='movieDetail.php' method='GET'>
                    <input type='hidden' name='mid' value='$movie_id'/>
                    <input type='submit' value='Movie Detail' name='book-ticket' />
                </form>
            </div>";
            }

        }
    } else {
        $ongoingMovieHTML = "<p style='margin:100px;'>No Movies available yet</p>";
        $nowShowingHTML = "<p style='margin:100px;'>No Movies available yet</p>";
    }

        

    if (isset($_GET['genre']) && $_GET['genre'] !== "View All") {
        $selectedGenre = $_GET['genre'];
        $sql = "SELECT *
                FROM movie
                INNER JOIN movie_genre ON movie.MID = movie_genre.Movie_ID
                INNER JOIN poster ON movie_genre.Movie_ID = poster.Movie_ID
                WHERE Genre = '$selectedGenre'";

        $result = mysqli_query($conn,$sql);


        if (mysqli_num_rows($result) >  0) {

            $ongoingMovieHTML = "";

            while ( $row = mysqli_fetch_assoc( $result ) ) {
                $movie_id = $row['MID'];
                $posterName = $row['Name'];
                $movieName = $row['Title'];
                $status = $row['Movie_Status'];


                if ($status == "Ongoing"){
                    $ongoingMovieHTML .= "<div class='movie-group'  id='$movie_id'>
                    <img src='module/$posterName' alt='poster (Refresh the browser)' />
                    <form action='movieDetail.php' method='GET'>
                        <input type='hidden' name='mid' value='$movie_id'/>
                        <input type='submit' value='Book Ticket' name='book-ticket' />
                    </form>
                </div>";
                }
            }
        } else {
            $ongoingMovieHTML = "<p style='margin:100px;'>No Movies available in Selected Genre</p>";
        }

    }

    if (isset($_GET['language']) && $_GET['language'] !== "View All"){
        $selectedLang = $_GET['language'];
        $sql = "SELECT * 
                FROM movie
                INNER JOIN poster ON movie.MID = poster.Movie_ID
                WHERE LANGUAGE = '$selectedLang'";
        
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) >  0) {
            $ongoingMovieHTML = "";

            while ( $row = mysqli_fetch_assoc( $result ) ) {
                $movie_id = $row['MID'];
                $posterName = $row['Name'];
                $movieName = $row['Title'];
                $status = $row['Movie_Status'];


                if ($status == "Ongoing"){
                    $ongoingMovieHTML .= "<div class='movie-group'  id='$movie_id'>
                    <img src='module/$posterName' alt='poster (Refresh the browser)' />
                    <form action='movieDetail.php' method='GET'>
                        <input type='hidden' name='mid' value='$movie_id'/>
                        <input type='submit' value='Book Ticket' name='book-ticket' />
                    </form>
                </div>";
                }
            }
        } else {
            $ongoingMovieHTML = "<p style='margin:100px;'>No Movies available in Selected Language</p>";
        }
    }


?>