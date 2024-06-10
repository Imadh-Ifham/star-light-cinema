<?php

function showPopup($message) {
    echo "<script>alert('$message'); // Display the alert
    setTimeout(function() {
        // Hide the alert after 3 seconds (3000 milliseconds)
        window.close();
    }, 3000);</script>";
}

?>