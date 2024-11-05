<?php

function emptyInputSignup($username, $password, $password_repeat) {
    if (empty($username) || empty($password) || empty($password_repeat)) {
        return true;
    }
    return false;
}

function emptyLoginInput($username, $password) {
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}

function invalidUsername($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        return true;
    }
    return false;
}

function passwordNotMatch($password, $password_repeat) {
    if ($password !== $password_repeat) {
        return true;
    }
    return false;
}

function usernameExists($conn, $username) {
    $sql = "SELECT * FROM user WHERE name = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $password) {
    $sql = "INSERT INTO user (name, password) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

function loginUser($conn, $username, $password) {
    $usernameExists = usernameExists($conn, $username);

    if ($usernameExists === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $usernameExists["password"];
    $checkPassword = password_verify($password, $passwordHashed);
    if ($checkPassword === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    else {
        session_start();
        $_SESSION["username"] = $usernameExists["username"];
        header("location: ../главная.html");
        exit();
    }
}
