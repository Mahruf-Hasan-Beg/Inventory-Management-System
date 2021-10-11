<?php
session_start();
if (
    isset($_SESSION['usermail'])

    && !empty($_SESSION['usermail'])
) {

    unset($_SESSION['usermail']);
    session_destroy();
?>
    <script>
        location.assign("Login.php");
    </script>
<?php

} else {
?>
    <script>
        location.assign("Login.php");
    </script>
<?php


}






?>