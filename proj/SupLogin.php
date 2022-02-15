<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (
        isset($_POST['supname'])
        &&  isset($_POST['suppass'])
        && !empty($_POST['supname'])
        && !empty($_POST['suppass'])
    ) {
        $name = $_POST['supname'];
        $regid = $_POST['suppass'];


        try {
            $conn1 = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");

            $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $myquery = "SELECT * FROM supplier WHERE Name='$name' and Reg_no='$regid'";

            $return = $conn1->query($myquery);

            if ($return->rowCount() == 1) {
                session_start();
                $_SESSION['username1'] = $regid;




?>
                <script>
                    location.assign("SupHome.php");
                </script>
            <?php

            } else {
            ?>
                <script>
                    location.assign("VendorLogin.php");
                </script>
            <?php


            }
        } catch (PDOException $ex) {
            ?>
            <script>
                location.assign("VendorLogin.php");
            </script>
    <?php
        }
    }
} else {

    ?>

    <script>
        location.assign("VendorLogin.php")
    </script>
<?php

}

?>