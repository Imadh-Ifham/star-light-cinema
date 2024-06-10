<?php
function timeToMinutes($timeString) {
    // Parse the time string into hours, minutes, and seconds
    $timeParts = explode(':', $timeString);
    $hours = (int)$timeParts[0];
    $minutes = (int)$timeParts[1];
    $seconds = isset($timeParts[2]) ? (int)$timeParts[2] : 0;

    // Calculate total minutes
    $totalMinutes = $hours * 60 + $minutes + round($seconds / 60);

    return $totalMinutes;
}
?>