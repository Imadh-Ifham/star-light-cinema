<?php

$sql = "SELECT * FROM Movie";
$result = $conn->query($sql);

if (mysqli_num_rows($result) >  0) {
    $running = "";
    $later = "";
    while ( $row = mysqli_fetch_assoc( $result ) ) {
        $movieName = $row['Title'];
        $status = $row['Movie_Status'];

        if ($status == "Ongoing"){
            $running .= "<li>$movieName</li>";
        } else if ($status == "Upcoming") {
            $later .= "<li>$movieName</li>";
        }

    }
}

?>
<div class="movie-list">
    <h4>Movie List</h4>
    <hr>
    <h5>Now Showing Movies</h5>
    <ol>
        <?php echo $running ?>
    </ol>
    <h5>Upcoming Movies</h5>
    <ol>
        <?php echo $later ?>
    </ol>
</div>