
<?php
include("include/db_connection.php");
$sql = "SELECT * FROM Poster WHERE isAd = 1 ORDER BY ID";
$result = mysqli_query($conn, $sql);

$x=0;
while ($row = mysqli_fetch_assoc($result)){
    $x++;
    $posterID = $row['ID'];
    $posterName = $row['Name'];
    $movieName = $row['related_movie'];
    echo "<div class='poster'>
    <div class='poster-head'>
        <h4>Slide $x</h4>
        <div class='icons'>
            <form action='admin_dashboard.php' method='GET' class='icon1'>
                <input type='hidden' name='editPosterID$x' value='$posterID'>
                <button type='submit' name='editPoster$x' value='$x'><i class='fa-solid fa-pen-to-square'></i></button>
            </form>
            <form action='CRUD/Poster/UPDATE.php' method='POST' class='icon1'>
                <input type='hidden' name='deletePosterID' value='$posterID'>
                <button type='submit' name='deletePoster' value='$x'><i class='fa-solid fa-trash'></i></button>
            </form>
        </div>
    </div>
    <img src='module/slide/$posterName' alt='Slide Poster $x'>
    <div class='poster-textbox'>
        <p class='txt'>Poster Name:</p>
        <span class='text'>$posterName</span>
        <br><br>
        <p class=txt>Related Movie:</p>
        <span class='text'>$movieName</span>
    </div>
</div>
";
}
?>