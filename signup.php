<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <?php include "include/header.php"?>
        <!-- Navigation Section -->
        <nav>
            <!-- Main Navigation Links -->
            <h2>REGISTRATION</h2>
            <?php include 'include/navHome.php' ?>
            <span></span>
        </nav>
    </header>

  <!-- Main Content Section -->
  <main>
    <div class="container">
      <h1>Sign Up</h1>
      <form action="CRUD/User/ADD.php" method="post">

        <fieldset>
          <legend></legend>
          <div class="form-group">
            <label for="email"> Email <span style="color: red;">*</span></label>
            <input type="email" id="email" name="email" required>
            <div id="emailError"></div>

          </div>
          <div class="form-group">
            <label for="password"> Password <span style="color: red;">*</span></label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="confirmPassword"> Confirm Password <span style="color: red;">*</span></label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </div>
          <div id="passwordMatchMessage"></div>
        </fieldset>

        <fieldset class="personal-info">
          <legend><strong>Personal Information</strong></legend>
          <div class="form-group">
            <label for="firstName"> First Name <span style="color: red;">*</span></label>
            <input type="text" id="firstName" name="firstName" required>
          </div>
          <div class="form-group">
            <label for="lastName"> Last Name <span style="color: red;">*</span></label>
            <input type="text" id="lastName" name="lastName" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
          </div>
          <div class="form-group">
            <h4>Gender:</h4>
            <div class="gender">
              <input type="radio" id="male" name="gender" value="male" required>
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
            </div>
          </div>
        </fieldset>
        <input type="checkbox" name="agree" id="agree" required>
        <label for="agree" style="font-size: 15px;">By creating an account you agree to our <br>
          <a href="privacy_policy.php" style="color:black; font-weight: bold; font-size:14px;">   Privacy Policy</a> and <a href="terms.php" style="color:black; font-weight: bold; font-size:14px;">Terms & Conditions</a>.<span style="color: red; ">*</span></label>
        <button type="submit">Submit</button>

      </form>
    </div>

  </main>

  <?php include "include/footer.php" ?>
  <script src="javascript/signup.js"></script>
</body>

</html>