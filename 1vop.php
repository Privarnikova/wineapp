<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style v.css">
<title>WINE</title>
</head>
<body>
<img class="i" src="images/logo.png" 
  width="483" height="256" alt=" ">
<h1 class="z">Which wine do you like more?</h1>
<img class="i1" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<img class="i2" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<form action="first.php" method="POST" >
<input type="radio" class = "v1"  name="first" value="1">
<label for="radio">Sweet</label>
<input type="radio" class = "v2"  name="first" value="2">
<label class="textw" for="radio">Dry</label></br>
<button class="next" type="submit">Next question</button>
 </form>
</body>
</html>
