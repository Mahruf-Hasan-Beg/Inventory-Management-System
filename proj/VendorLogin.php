<!DOCTYPE html>

  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Vendor Login</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="center">
      <h1>Supplier Login</h1>
      <form action="SupLogin.php" method="POST">
        <div class="txt_field">
          <input type="text" id="supname" name="supname" required>
          <span></span>
          <label for="supname">Username</label>
        </div>
        <div class="txt_field">
          <input type="password" id="suppass" name="suppass" required>
          <span></span>
          <label for="suppass">Reg. No</label>
        </div>

        <input type="submit" value="Login">
        <div class="signup_link">

          <a href="http://localhost/proj/Login.php"> Admin Sign in</a>


        </div>
        <div class="signup_link">

          <a href="http://localhost/proj/Register.php"> Sign up as a Supplier</a>


        </div>
      </form>
    </div>

  </body>

  </html>