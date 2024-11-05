<?php
session_start();
require_once 'dhb.inc.php';

$_SESSION['first'] = $_POST["first"];
if($_SESSION['first'] !=0)
{
header('location: ../2vop.php');
}
?>