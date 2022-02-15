

<!DOCTYPE html>
<!Inventory Management System>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form action="adminlogin.php" method="POST">
        <div class="txt_field">
          <input type="email" id="myemail" name="myemail" required>
          <span></span>
          <label for="myemail">Email</label>
        </div>
        <div class="txt_field">
          <input type="password" id="mypass" name="mypass" required>
          <span></span>
          <label for="mypass">Password</label>
        </div>

        <input type="submit" value="Login">
        <div class="signup_link">
          <a href="http://localhost/proj/VendorLogin.php"> Login as Supplier</a>


        </div>
        <div class="signup_link">
          <a href="http://localhost/proj/Register.php"> New Supplier Sign Up</a>


        </div>
      </form>
    </div>

  </body>

  </html>

