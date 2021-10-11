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
    && isset($_POST['pr'])


    && !empty($_POST['prvar'])
    && !empty($_POST['prname'])
    && !empty($_POST['prsku'])
    && !empty($_POST['prprice'])
    && !empty($_POST['pr'])


  ) {



    $var = $_POST['prvar'];
    $name = $_POST['prname'];
    $sk = $_POST['prsku'];
    $price = $_POST['prprice'];
    $reg = $_POST['pr'];


    try {
      $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $myquerystring = "insert into transactions values('$var','$name','$sk',$price,$reg)";

      $conn->exec($myquerystring);
?>

      <script>
        location.assign("Homepage.php");
      </script>
    <?php


    } catch (PDOException $ex) {
    ?>
      <script>
        location.assign("addtrans.php");
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      location.assign("addtrans.php");
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