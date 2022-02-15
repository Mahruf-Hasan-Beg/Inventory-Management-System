<?php
session_start();

if (
  isset($_SESSION['usermail'])

  && !empty($_SESSION['usermail'])
) {
?>
  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
     #ptable {
        background: url("lk1.jpg");
        background-size: cover;
        font-size: 30px;
        color: black;
        width: 100%;
        

      }

      #ptable th{
        border-radius: 7px;
        background-color: black;
        color: white;}
      #ptable td {

        border-radius: 5px;

        border: 2px solid white;
        text-align: center;
      }

      #ptable tr:hover {

        background-color: black;
        color: white;
      }


      .bt {

        background-color: red;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;

        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;



      }
      


      

      .bt1 {

        background-color: deepskyblue;

        color: white;
        padding: 5px 10px;
        text-align: center;
        text-shadow: lightgoldenrodyellow;
        text-decoration: none;

        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;



      }
    </style>

  </head>

  <body>

    <div class="wrapper">
      <nav id="sidebar">
        <div class="title">
          Admin
        </div>
        <ul class="list-items">
          <li><a href="http://localhost/proj/godown.php"><i class="fas fa-home"></i>Godowns</a></li>
          <li><a href="http://localhost/proj/supplier.php"><i class="fas fa-user"></i>Suppliers</a></li>
          <li><a href="http://localhost/proj/transactions.php"><i class="fas fa-comments-dollar"></i>Transactions</a></li>
          <li><a href="http://localhost/proj/stock.php"><i class="fas fa-database"></i>Stock</a></li>
          <li><a href="http://localhost/proj/newProduct.php"><i class="fas fa-stream"></i>New Products Info</a></li>


        </ul>
      </nav>
    </div>
    <div class="main">
      <h3><a href="http://localhost/proj/Homepage.php">Homepage</a></h3>
      Welcome!<?php echo ' Admin' ?>
      <br>
      <input type="button" class="bt" value="Log Out" onclick="logoutfnc();">
      <div>
        <h3>Showing All Registered Suppliers</h3>
        <table id="ptable">
          <thead>
            <tr>
              <th>Reg No</th>
              <th>Name</th>
              <th>Type</th>
              <th>Area</th>

            </tr>
          </thead>
          <tbody>
            <?php
            try {
              $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $mysqlquery = "select * from supplier";
              $returnOb = $conn->query($mysqlquery);
              $returntbl = $returnOb->fetchALL();

              if ($returnOb->rowCount() == 0) {

            ?>
                <tr>

                  <td colspan="4">No Supplier!!!</td>

                </tr>

                <?php
              } else {
                foreach ($returntbl as $row) {

                ?>

                  <tr>

                    <td><?php echo $row['Reg_no'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Supplier_Type'] ?></td>
                    <td><?php echo $row['Location'] ?></td>




                    </td>
                  </tr>
              <?php


                }
              }
            } catch (PDOException $ex) {
              ?>
              <tr>

                <td colspan="4">No Supplier!!!</td>

              </tr>

            <?php
            }
            ?>

          </tbody>

        </table>
      </div>

    </div>

    <br>



    <script>
      function logoutfnc() {

        location.assign('logout.php');


      }
    </script>
  </body>

  </html>

<?php
} else {
?>
  <script>
    location.assign("Login.php");
  </script>
<?php

}

?>