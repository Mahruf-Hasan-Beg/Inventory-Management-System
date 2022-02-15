<?php

session_start();

if (
  isset($_SESSION['usermail'])

  && !empty($_SESSION['usermail'])
) {

  if (
    isset($_POST['prvar'])
    && isset($_POST['prname'])
    && isset($_POST['prsku'])
    && isset($_POST['prprice'])
    && isset($_POST['prreg'])
    && isset($_POST['prpart'])
    
    && !empty($_POST['prvar'])
    && !empty($_POST['prname'])
    && !empty($_POST['prsku'])
    && !empty($_POST['prprice'])
    && !empty($_POST['prreg'])
    && !empty($_POST['prpart'])
    
  ) {



    $var = $_POST['prvar'];
    $name = $_POST['prname'];
    $sk = $_POST['prsku'];
    $price = $_POST['prprice'];
    $reg = $_POST['prreg'];
    $part = $_POST['prpart'];
    $image = $_FILES['primage'];


    $image_name = $image['name'];
    $image_tmp_path = $image['tmp_name'];
    $to = "productimage/$image_name";

    move_uploaded_file($image_tmp_path, $to);

    try {
      $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $myquerystring = "insert into products values('$var','$name',$sk,$price,$reg,$part,'$to')";

      $conn->exec($myquerystring);

      $myquerystring2 ="UPDATE stock SET Quantity=Quantity+1 WHERE Part_no=$part";
     
       $conn->exec($myquerystring2);
?>

      <script>
        location.assign("Homepage.php");
      </script>
    <?php


    } catch (PDOException $ex) {
    ?>
      <script>
        location.assign("addproduct.php");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      location.assign("addproduct.php");
    </script>
  <?php


  }
} else {
  ?>
  <script>
    location.assign("Login.php");
  </script>
<?php


}







?>