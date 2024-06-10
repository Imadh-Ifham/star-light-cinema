 <?php
include('include/db_connection.php');
include('CRUD/booking/ADD.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/payment.css">
</head>
<body>
    <header>
         <?php include "include/header.php"?>
         <nav>
            <!-- Main Navigation Links -->
            <h2>Payment Page</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
   </header>

 <main>
    <div class="container">
        <h1>Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Name On Card</h3>
                <div class="input-field">
                    <input type="text" id="name" maxlength="50">
                    <p id="matchName"></p>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" id="CVV" maxlength="3">
                    <p id="matchCvv"></p>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" id="card-no" maxlength="19">
                </div>
            </div>
        </div>
        <p id="matchCardnumber"></p>
        <div class="third-row">
            
                <h3>Expiry Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                            <option value="2028">2028</option>
                            <option value="2027">2027</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="module/system/mc.png" alt="">
                        <img src="module/system/vi.png" alt="">
                        <img src="module/system/pp.png" alt="">
                    </div>
                </div>

           
        </div>
        <input type="submit" value="Confirm">
    </div>
 </main>

 <?php include "include/footer.php" ?>
    <script src="javascript/payment.js"></script>
</body>
</html>
<?php mysqli_close($conn) ?>