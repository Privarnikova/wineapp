
<?php

$serverName = "localhost";
$adminName = "root1";
$dBPassword = "root1";
$dBName = "wine";

$conn = mysqli_connect($serverName, $adminName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>