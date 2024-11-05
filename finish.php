<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style f.css">
<title>WINE</title>
</head>
<body>
<form action="final.php" method = "post" class='green-container'>
 <img class="ir" src="images/logo.png" width="483" height="256" alt=" ">
 <h1 class="ff">YOUR WINE</h1>
 <div class="n"></div>
<?php
echo '<div class=n_a>'  .$_SESSION['rwine']['name'].'</div>';
?>

<button class="buttonfin"  href="">BUY</button>
 </form>

</body>
</html>

