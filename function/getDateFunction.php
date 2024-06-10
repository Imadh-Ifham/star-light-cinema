<?php

function getDay() {
    date_default_timezone_set('Asia/Colombo');
    // Get today's date
    $todayD = new DateTime();

    // Get tomorrow's date
    $tomorrowD = new DateTime();
    $tomorrowD->modify('+1 day');

    // Get the day after tomorrow's date
    $dayAfterTomorrowD = new DateTime();
    $dayAfterTomorrowD->modify('+2 days');

    // Format the dates
    $todayText = $todayD->format('d');
    $tomorrowText = $tomorrowD->format('d');
    $dayAfterTomorrowText = $dayAfterTomorrowD->format('d');

    // Return an associative array with the date texts
    return [
        'today' => $todayText,
        'tomorrow' => $tomorrowText,
        'dayAfterTomorrow' => $dayAfterTomorrowText
    ];
}
// Example usage

$day1 = getDay()['today'];
$day2 = getDay()['tomorrow'];
$day3 = getDay()[ 'dayAfterTomorrow' ];





function getDates() {
    date_default_timezone_set('Asia/Colombo');
    // Get today's date
    $today = date("Y-m-d");

    // Get tomorrow's date
    $tomorrow = date("Y-m-d", strtotime("+1 day"));

    // Get the day after tomorrow's date
    $dayAfterTomorrow = date("Y-m-d", strtotime("+2 day"));

    return array(
        'today' => $today,
        'tomorrow' => $tomorrow,
        'dayAfterTomorrow' => $dayAfterTomorrow
    );
}

// Usage example
$date1 = getDates()['today'];
$date2 = getDates()['tomorrow'];
$date3 = getDates()['dayAfterTomorrow'];

?>