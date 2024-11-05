<?php
session_start();
require_once 'dhb.inc.php';
$first = $_SESSION['first'];
$second = $_SESSION['second'];
$third = $_POST['third'];
if($third !=0)
{
    $serverName = "localhost";
    $adminName = "root1";
    $dBPassword = "root1";
    $dBName = "wine";

    $conn = mysqli_connect($serverName, $adminName, $dBPassword, $dBName);
    $check_answer = mysqli_query($conn,"SELEST * FROM 'answer' WHERE 'first' = '$first' AND 'second' = '$second' AND 'third' = '$third'");
if(mysqli_num_rows($check_answer)>0){
while($result=mysqli_fetch_array($check_answer)){
$i=$result['id'];
  }
 }
$check_wine = mysqli_query($conn,"SELEST * FROM 'wines' WHERE 'id' = '$i'");
if(mysqli_num_rows($check_wine)>0){
$_SESSION['rwine'] = mysqli_fetch_array($check_wine);
header('location: ../finish.php');
}
}
?>