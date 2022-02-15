<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (
            isset($_POST['myemail'])
        &&  isset($_POST['mypass'])
        && !empty($_POST['myemail'])
        && !empty($_POST['mypass'])
    ) {
         $email = $_POST['myemail'];
         $pass =  $_POST['mypass'];

        try {
            $conn = new PDO("mysql:host=localhost:3306;dbname=n1;", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $myquerystring = "SELECT * FROM manager WHERE Email='$email' and Manager_ID='$pass'";

            $returnobj = $conn->query($myquerystring);

            if ($returnobj->rowCount() == 1) {
                session_start();
                $_SESSION['usermail'] = $email;

?>
                <script>
                    location.assign("Homepage.php");
                </script>
            <?php

            } else {
            ?>
                <script>
                    location.assign("Login.php");
                </script>
            <?php


            }
        } catch (PDOException $ex) {
            ?>
            <script>
                location.assign("Login.php");
            </script>
    <?php
        }
    }
} else {

    ?>

    <script>
        location.assign("Login.php")
    </script>
<?php

}
?>


