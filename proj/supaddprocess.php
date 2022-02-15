<?php

session_start();

if (
  isset($_SESSION['username1'])

  && !empty($_SESSION['username1'])
) {

  if (
    isset($_POST['prvar'])
    && isset($_POST['prname'])
    && isset($_POST['prsku'])
    && isset($_POST['ty'])
    && isset($_POST['prprice'])
    && isset($_POST['prreg'])


    && !empty($_POST['prvar'])
    && !empty($_POST['prname'])
    && !empty($_POST['prsku'])
    && !empty($_POST['ty'])
    && !empty($_POST['prprice'])
    && !empty($_POST['prreg'])


  ) {



    $var = $_POST['prvar'];
    $name = $_POST['prname'];
    $sk = $_POST['prsku'];
    $type = $_POST['ty'];
    $price = $_POST['prprice'];
    $reg = $_POST['prreg'];


    try {
      $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $myquerystring = "insert into new_products values('$var','$name')";
      $conn->exec($myquerystring);
      $myquerystring2 = "insert into informs values('$sk','$type','$price','$name','$reg')";
      $conn->exec($myquerystring2);



?>

      <script>
        location.assign("SupHome.php");
      </script>
    <?php


    } catch (PDOException $ex) {
    ?>
      <script>
        location.assign("Supnewproduct.php");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      location.assign("Supnewproduct.php");
    </script>
  <?php


  }
} else {
  ?>
  <script>
    location.assign("SupLogin.php");
  </script>
<?php


}







?>