<span class="navigation">
    <a href="index.php">Home</a>
    <a href="contact.php">Contact Us</a>
    <a href="offer.php">Offers</a>
    <?php
    if(isset($_SESSION['role']) && $_SESSION['role'] !== "user" ) {
        echo "<a href='admin_dashboard.php'>Dashboard</a>";
    }
    ?>
</span>