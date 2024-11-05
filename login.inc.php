<?php

if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dhb.inc.php';
    require_once 'function.inc.php';

    if (emptyLoginInput($username, $password) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    $serverName = "localhost";
    $adminName = "root1";
    $dBPassword = "root1";
    $dBName = "wine";

    $conn = mysqli_connect($serverName, $adminName, $dBPassword, $dBName);
    loginUser($conn, $username, $password);
}
else {
    header("location: ../index.php");
    exit();
}