<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        isset($_POST['regno'])
        && isset($_POST['vendorname'])
        && isset($_POST['typeLocGlob'])
        && isset($_POST['location'])

        && !empty($_POST['regno'])
        && !empty($_POST['vendorname'])
        && !empty($_POST['typeLocGlob'])
        && !empty($_POST['location'])
    ) {

        $reg = $_POST['regno'];
        $name = $_POST['vendorname'];
        $type = $_POST['typeLocGlob'];
        $loc = $_POST['location'];




        try {
            $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            $signupquery = "insert into supplier values('$reg','$name','$type','$loc')";


            $conn->exec($signupquery);

?>
            <script>
                location.assign("Login.php");
            </script>
        <?php


        } catch (PDOException $ex) {
        ?>
            <script>
                location.assign("Register.php");
            </script>
        <?php
        }
    } else {

        ?>
        <script>
            location.assign("Register.php");
        </script>
<?php

    }
} else {


    echo '<script>location.assign("Register.php");</script>';
}


?>