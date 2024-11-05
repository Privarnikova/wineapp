<?php

if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat = $_POST["password_repeat"];

    require_once 'dhb.inc.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($username, $password, $password_repeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    else if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    else if (passwordNotMatch($password, $password_repeat) !== false) {
        header("location: ../signup.php?error=passwordnotmatch");
        exit();
    }
    else if (usernameExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernameexists");
        exit();
    }

    createUser($conn, $username, $password);

}
else {
    header("location: ../signup.php");
    exit();
}