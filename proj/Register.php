<!DOCTYPE html>

  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="center">
      <h1>Please fill up the form</h1>
      <form action="RegisterUser.php" method="POST">

        <div class="txt_field">
          <input type="password" id="regno" name="regno" required>
          <span></span>
          <label for="regno">Reg. No</label>
        </div>

        <div class="txt_field">
          <input type="text" id="vendorname" name="vendorname" required>
          <span></span>
          <label for="vendorname">Your Name</label>
        </div>

        <div class="txt_field">
          <input type="text" id="typeLocGlob" name="typeLocGlob" required>
          <span></span>
          <label for="typeLocGlob">Seller Type(Local/Global)</label>
        </div>

        <div class="txt_field">
          <input type="text" id="location" name="location" required>
          <span></span>
          <label for="location">Location</label>
        </div>


        <input type="submit" value="Submit">
        <div class="signup_link">
          <a href="http://localhost/proj/Login.php"> Back to Login</a>
        </div>
      </form>
    </div>

  </body>

  </html>