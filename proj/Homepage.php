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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <style>


  input[type=text]{
    margin: auto 615px auto; auto;
  width: 25%;
  height: 35px;
  text-align: center;
  box-shadow: -10px 2px 20px deepskyblue;
  
  border: 2px solid deepskyblue ;
  
  border-radius: 5px;
  
  

}
input[type=submit]{
   margin: auto 780px auto; auto;
  font-size: 15px;
  background-color: black;
  color: white;
  
 
  width: 5%;
  height: 28px;
  display: inline-block;
  border-radius: 5px;
  border: 2px solid deepskyblue ;
  e;

}
input[type=submit]:HOVER{
  font-size: 15px;
  background-color: deepskyblue;
  cursor: pointer;
  color: white;
  
 
  width: 5%;
  height: 28px;
  display: inline-block;
  border-radius: 10px;
  border: 2px solid deepskyblue ;
  

}

      #ptable {

        
        background-color: white;
        width: 100%;
        border-radius: 10px;
        
        font-size: 25px;
        box-shadow: -10px 2px 20px deepskyblue;

      }

      #ptable th {
        border: 2px solid black;
        border-radius: 7px;

        background-color: black;
        color: white;
      }

      #ptable td {
        
  
        border-radius: 7px;

        border: 2px solid black;
        text-align: center;

        letter-spacing: 0px;

      }
      #ptable tr:hover {
        

        background-color: #96fffd;
        color: black;
        cursor: pointer;


      }
      .button {

        background-color: white;

        color: red;
        padding: 2px 4px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        line-height: 1;
        cursor: pointer;
        border-radius: 10px;


      }
      .button:hover {

        background-color: red;
        color: white;
      }
     

      .bt {

        background-color: green;

        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: ;

        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
      }
      .bt:hover{
        background-color: yellow;
        color: black;


      }

      .bt1 {

        background-color: red;
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
      
     

      #Home {


        font-size: 30px;
        border: 3px;

        border-color: black;
        border-radius: 6px;


        text-align: center;
        background-color: deepskyblue;

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
      <h2 id="Home">Inventory Management System</h2>
     
      <br>

      

      <form action="search.php" method="GET">
        <input type="text" id="search" name="search" placeholder="SKU">
        <br>

      
        
        <input type="submit" value="Search"></form>
        
         
         

<input type="button" class="bt" value="Add Product" onclick="addproduct();">
      <input type="button" class="bt1" value="Log Out" onclick="logoutfnc();">

      
      <div class="tab">
        <h4>All Product List</h4>
        <table id="ptable">
          <thead>
            <tr>
              <th>Varient</th>
              <th>Name</th>
              <th>SKU</th>
              <th>Price</th>
              <th>Supplier Reg No</th>
              <th>Part No</th>
              <th>Image</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <?php
            try {
              $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $mysqlquery = "select * from products";
              $returnOb = $conn->query($mysqlquery);
              $returntbl = $returnOb->fetchALL();

              if ($returnOb->rowCount() == 0) {

            ?>
                <tr>

                  <td colspan="8">No Products Available</td>

                </tr>

                <?php
              } else {
                foreach ($returntbl as $row) {

                ?>

                  <tr>

                    <td><?php echo $row['Varient'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['SKU'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><?php echo $row['Reg_no'] ?></td>
                    <td><?php echo $row['Part_no'] ?></td>
                    <td><img src="<?php echo $row['imagepath'] ?>" width="65" height="65"></td>
                    <td><input type="Button" class="button" value="Remove" onclick="deletefn(<?php echo $row['SKU'] ?>,<?php echo $row['Part_no'] ?>);"></td>
                  </tr>
              <?php


                }
              }
            } catch (PDOException $ex) {
              ?>
              <tr>

                <td colspan="8">No Products Available</td>

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

      function addproduct() {
        location.assign('addproduct.php');

      }

      function deletefn(sku,part) {
        location.assign(`delete.php?prosku=${sku}&partx=${part}`);
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