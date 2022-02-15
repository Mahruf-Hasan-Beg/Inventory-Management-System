<?php
session_start();

if (
  isset($_SESSION['usermail'])

  && !empty($_SESSION['usermail'])
   )

{

  if( isset($_GET['prosku'])
   &&!empty($_GET['prosku'])
)
  {
    $pro_sku=$_GET['prosku'];
    $part2=$_GET['partx'];
    

     try {
      $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $myquerystring = "delete from products where SKU=$pro_sku";
     
       $myquerystring2 ="UPDATE stock SET Quantity=Quantity-1 WHERE Part_no=$part2";
       $conn->exec($myquerystring);
       $conn->exec($myquerystring2);


?>

      <script>
        location.assign("Homepage.php");
      </script>
    <?php


    } catch (PDOException $ex) {
    ?>
      <script>
        location.assign("Homepage.php");
      </script>
    <?php
    }

  }
  else{
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