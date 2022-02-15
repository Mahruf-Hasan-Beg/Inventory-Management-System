<?php


session_start();



if (
  isset($_SESSION['username1'])

  && !empty($_SESSION['username1'])
) {



?>

  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="stylesuphome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
      .bt {

        background-color: brown;

        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;

        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;



      }
      .bt:hover{
        background-color: red;
        color: white;

      }


      #ptable {
        background-color: floralwhite;
        width: 100%;
        border: 3px solid orange;
        font-size: 30px;
      }

      #ptable th{
        background-color: black;
        color: white;


      }
      #ptable td {

        border: 2px solid brown;
        text-align: center;
      }

      #ptable tr:hover {

        background-color: chocolate;
        color: ghostwhite;
      }
    </style>

  </head>

  <body>

    <div class="wrapper">
      <nav id="sidebar">
        <div class="title">
          Supplier
        </div>
        <ul class="list-items">
          <li><a href="http://localhost/proj/suptransaction.php"><i class="fas fa-money-check-alt"></i>My Transactions</a></li>
          <li><a href="http://localhost/proj/shipment.php"><i class="fas fa-shipping-fast"></i>Shipment</a></li>



        </ul>
      </nav>
    </div>
    <div class="main">
      <h3><a href="http://localhost/proj/SupHome.php">Homepage</a></h3>
      Welcome! <?php echo 'Supplier' ?>
      <br>
      <input type="button" class="bt" value="New Product" onclick="newproduct();">
      <input type="button" class="bt" value="Log Out" onclick="logoutfnc();">
      <div>
        <h4>Products On the Way</h4>
        <table id="ptable">
          <thead>
            <tr>
              <th>From</th>
              <th>Serial No</th>
              <th>Shipout Date</th>



            </tr>
          </thead>
          <tbody>
            <?php



            try {

              $id1 = $_SESSION['username1'];
              $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $mysqlquery = "SELECT * from shipment where Reg_no=$id1";
              $returnOb = $conn->query($mysqlquery);
              $returntbl = $returnOb->fetchALL();

              if ($returnOb->rowCount() == 0) {

            ?>
                <tr>

                  <td colspan="3">Empty!!!</td>

                </tr>

                <?php
              } else {
                foreach ($returntbl as $row) {

                ?>

                  <tr>
                    <td><?php echo $row['Address'] ?></td>

                    <td><?php echo $row['Serial_no'] ?></td>

                    <td><?php echo $row['shipout_date'] ?></td>




                  </tr>
              <?php


                }
              }
            } catch (PDOException $ex) {
              ?>
              <tr>

                <td colspan="3">Empty!!!</td>

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

        location.assign('SupLogout.php');


      }

      function newproduct() {
        location.assign('Supnewproduct.php');

      }
    </script>
  </body>

  </html>

<?php
} else {
?>
  <script>
    location.assign("VendorLogin.php");
  </script>
<?php

}

?>