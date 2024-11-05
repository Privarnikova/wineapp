<?php
session_start();
require_once 'dhb.inc.php';

$_SESSION['second'] = $_POST["second"];
if($_SESSION['second'] !=0)
{
header('Location: ../3vop.php');
}
?>