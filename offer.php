<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking Offers</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/offer.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>EXCLUSIVE OFFERS</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
    <main>
        <section class="poster">
            <img src="module/slide/offer1.png" alt="">
            <img src="module/slide/offer2.png" alt="">
            <img src="module/slide/offer3.png" alt="">
        </section>
        <section class="offer">
            <div class="offer-details">
                <h2>🎉 Grand Premiere Offer</h2>
                <p>Experience the grand premiere of our latest blockbuster with complimentary popcorn and drinks!</p>
                <p>Valid for the first 2 bookings only.</p>
            </div>
        </section>
        <section class="offer">
            <div class="offer-details">
                <h2>🍿 Movie Night Special</h2>
                <p>Get 50% off on all movie tickets booked for Friday night shows!</p>
                <p>Use code MOVIE50 at checkout.</p>
            </div>
        </section>
        <section class="offer">
            <div class="offer-details">
                <h2>🎁 Family Funday Discount</h2>
                <p>Bring your family and enjoy a 25% discount on tickets for a group of 4 or more!</p>
                <p>Available on weekends only.</p>
            </div>
        </section>
    </main>
    <!-- More offers can be added here -->

    <!-- Footer Section -->
    <?php include "include/footer.php" ?>
    <script src="javascript/home.js"></script>
</body>
</html>
