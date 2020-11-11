<?php
require_once("dbConfig.php");

if (isset($_POST["connect-submit"])) {
    $email = $_POST["connect-email"];
    $password = $_POST["connect-password"];

    echo "Email :" . $email . " | MDP :" . $password;
    getPDO("PtutS3");
}

?>