<?php
session_start();
if (
    isset($_SESSION['username1'])

    && !empty($_SESSION['username1'])
) {

    unset($_SESSION['username1']);
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