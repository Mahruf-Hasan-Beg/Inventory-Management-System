<?php


session_start();

if (
  isset($_SESSION['usermail'])

  && !empty($_SESSION['usermail'])
){
	if (
    isset($_GET['search'])
    
    
    && !empty($_GET['search'])
   
    
  ){

?>


    <style>

      #ptable {
        margin: auto 450px auto auto;
        
        background-color: #96fffd;
        width: 50%;
        border-radius: 10px;
        
        font-size: 25px;
        box-shadow: -3px 3px 15px deepskyblue;

      }

      #ptable th {
        border: 2px solid black;
        border-radius: 7px;

        background-color: black;
        color: black;
      }


      #ptable td {
        
  
        border-radius: 5px;

        border: 2px solid black;
        text-align: center;

        letter-spacing: 0px;

      }
      

      #Home {


        font-size: 30px;
        border: 3px;

        border-color: black;
        border-radius: 6px;


        text-align: center;
        background-color: deepskyblue;

      }
       *{

      background-image: url("w.jpg");
    }
    </style>
    <?php

    $src=$_GET['search'];
		
            try {
              $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $mysqlquery = "select * from products";
              $returnOb = $conn->query($mysqlquery);
              $returntbl = $returnOb->fetchALL();

              if ($returnOb->rowCount() == 0) {
                echo"No products in Stock";

            ?>
                

                <?php
              } else {
                foreach ($returntbl as $row) 
                  if ($row['SKU']==$src) {

                    ?>
                    <div class="tab">
        <h2>Item Found</h2>
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
              
            </tr>
          </thead>
          <tbody>
            <?php
            try {
              $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $mysqlquery = "select * from products where SKU=$src";
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
                    <td><img src="<?php echo $row['imagepath'] ?>" width="65" height="60"></td>
                    
                  </tr>
              <?php


                }
              }
            } catch (PDOException $ex) {
              ?>
              <tr>

                <td colspan="8">Not Available</td>

              </tr>

            <?php
            }
            ?>

          </tbody>

        </table>
      </div>
<?php
                   
                    
                  }
                  else {
echo"\n\n";

}

                ?>

                  
              <?php


                
              }
            } catch (PDOException $ex) {
              ?>
              <tr>

                <td colspan="8">No Products Available</td>

              </tr>

            <?php
            }

	}
	else {
?>
  <script>
    location.assign("Homepage.php");
  </script>
<?php

}
}

else {
?>
  <script>
    location.assign("Login.php");
  </script>
<?php

}




?>