

<?php
include("include/db_connection.php");
$sql = "SELECT * FROM Poster WHERE isAd = TRUE ORDER BY ID";
$result = mysqli_query($conn, $sql);

$poster1 = mysqli_fetch_assoc($result)['Name'];
$poster2 = mysqli_fetch_assoc($result)['Name'];
$poster3 = mysqli_fetch_assoc($result)['Name'];
$poster4 = mysqli_fetch_assoc($result)['Name'];
$poster5 = mysqli_fetch_assoc($result)['Name']; 

?>

<div class="slider">
    <div class="slides">
        <!-- radio buttons -->
        <input type="radio" name="slides-radio-btn" id="radio1">
        <input type="radio" name="slides-radio-btn" id="radio2">
        <input type="radio" name="slides-radio-btn" id="radio3">
        <input type="radio" name="slides-radio-btn" id="radio4">
        <input type="radio" name="slides-radio-btn" id="radio5">

        <!-- slide images -->
        <div class="slide first">
            <img src="module/slide/<?php echo $poster1 ?>" alt="Slide Poster 1" />
        </div>
        <div class="slide">
            <img src="module/slide/<?php echo $poster2 ?>" alt="Slide Poster 2" />
        </div>
        <div class="slide">
            <img src="module/slide/<?php echo $poster3 ?>" alt="Slide Poster 3" />
        </div>
        <div class="slide">
            <img src="module/slide/<?php echo $poster4 ?>" alt="Slide Poster 4" />
        </div>
        <div class="slide">
            <img src="module/slide/<?php echo $poster5 ?>" alt="Slide Poster 5" />
        </div>
    </div>
</div>
<script src="javascript/slider.js"></script>
<?php mysqli_close( $conn ); ?>
