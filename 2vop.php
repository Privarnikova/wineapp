
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
<h1 class="z2">What will your evening be like?</h1>
<img class="i1" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<img class="i2" src="images/bok.png" 
  width=" 436" height="641" alt=" ">
<form action="second.php" method="post" >
<input type="radio" class = "v3" id="radioButton" name="second" value="1">
<label class="fr" for="radio">Evening with friends</label>
<input type="radio" class = "v4" id="radioButton" name="second" value="2">
<label class="rom" for="radio">Romantic evening</label>
<input type="radio" class = "v5" id="radioButton" name="second" value="3">
<label class="you" for="radio">Evening with yourself</label>
<button class="next" type="submit">Next question</button>
  </form>
</body>
</html>

