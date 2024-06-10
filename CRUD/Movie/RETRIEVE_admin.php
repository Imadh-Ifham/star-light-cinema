<?php
    $sql = "SELECT * FROM Movie";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) >  0) {
        while ( $row1 = mysqli_fetch_assoc( $result ) ) {
            $movieID = $row1['MID'];
            $movieName = $row1['Title'];
            $director = $row1['Director'];
            $description = $row1['Description'];
            $rating = $row1['Rating'];
            $status = $row1['Movie_Status'];
            $language = $row1['language'];

            // retrieving poster details
            $sql_poster = "SELECT Name FROM Poster WHERE Movie_ID = '$movieID'";
            $posters = mysqli_query($conn, $sql_poster);  //get
            $posterName = mysqli_fetch_assoc($posters)['Name'];
            
            // Retrieving cast data
            include('include/cast.php');

            // retrieving  genre data
            include('include/genre.php');

            // Rate by stars
            include('include/starRate.php');

            // Creating HTML for Movie Status
            $movieStatusHTML = ($status == 'Ongoing') ? '<span style="color: green;">Now showing</span>' : '<span style="color: blue;">Upcoming</span>';


            echo "
            <div class='movie'  id='$movieID'>
                    <img src='module/$posterName' alt='Movie Poster'>
                    <div>
                        
                        <h3>$movieName - ($language)</h3>
                        $starRate
                        <p>$genreHTML</p>
                        <div class='form'>
                            <form class='editForm' action='movieUpdate.php' method='GET'>
                                <input type='hidden' name='mid' value='$movieID' />
                                <button type='submit' name='movieEdit'><i class='fa-solid fa-pen-to-square'></i></button>
                            </form>
                            <form class='deleteForm' action='CRUD/Movie/DELETE_admin.php' method='POST'>
                                <input type='hidden' name='movie_id' value='$movieID' />
                                <button type='submit' ><i class='fa-solid fa-trash icon2' data-movie='" . $movieID . "'></i></button>
                            </form>
                        </div>
                        <p><b>Director:</b> $director</p>
                        <p><b>Stars:</b>  $actorHTML </p>
                        <p><b>Status:  $movieStatusHTML</b></p>
                        <p>  -- $description</p>
                    </div>
                </div>";

        }
    }
?>