<?php
    // Calculating how many filled, half-filled and empty stars
    $filledStar = intval($rating / 2);
    $halfStar = (($rating % 2) == 1) ? 1 : 0;
    $emptyStars = 5 - $filledStar - $halfStar;

    // Converting Stars values to HTML
    $filledStarHTML =  str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', $filledStar);
    $halfStarHTML = ($halfStar == 1) ? '<i class="fa fa-star-half-o" aria-hidden="true"></i>' : '';
    $emptyStarHTML = str_repeat('<i class="fa fa-star-o" aria-hidden="true"></i>', $emptyStars);
    $starRate = $filledStarHTML. $halfStarHTML . $emptyStarHTML;
?>