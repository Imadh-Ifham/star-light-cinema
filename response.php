<?php
include('include/accessRestrict.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/response.css">
    <script src="javascript/response.js"></script>
</head>

<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>RESPONSE</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>
   
     <!--contact us response page-->
<main>
     <div class="response-form">
         <form action="#" method="post">
            <span class="underline">Responses</span>
            <span class="required">*No enquiries yet</span>
        <table>
        <tr class="heading">
            <th>Status</th>
            <th>Name</th>
            <th>Email</th>
            <th>Enquiry Date</th>
            <th>Reply</th>
        </tr>
        <tbody id="table-body">
        <tr>
            <td class="center-align"><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td class="center-align"><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td class="center-align"><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td class="center-align"><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td class="center-align"><input type="checkbox"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
      
    </tbody>
</table>

</div>
</main>
    <!-- Footer Section -->
    <?php include "include/footer.php" ?>
    

   
</body>
</html>