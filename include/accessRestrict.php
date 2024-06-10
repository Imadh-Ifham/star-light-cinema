<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['role'] == 'user'){
    header("Location: restricted.php");
    exit;
}

?>