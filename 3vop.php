
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
<h1 class="z2">What will you drink wine with?</h1>
<img class="i1" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<img class="i2" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<form action="third.php" method="post" >
<input type="radio" class = "v1" id="radioButton" name="third" value="1">
<label for="radio">Meat</label>
<input type="radio" class = "v2" id="radioButton" name="third" value="2">
<label class="textw" for="radio">Fish</label>
<input type="radio" class = "v6" id="radioButton" name="third" value="3">
<label class="texts" for="radio">Snacks</label>
<button class="next" type="submit">Finish the survey</button>
  </form>
</body>
</html>

