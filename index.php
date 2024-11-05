<?php
$error = "";
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        $error = "Fill in all fields";
    }
    else if ($_GET["error"] == "wronglogin") {
        $error = "Wrong username/password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style r.css">
<title>WINE</title>
</head>
<body>
<form action="login.inc.php" method="post" class='green-container' id="login">
 <img class="i" src="images/logo.png" width="483" height="256" alt=" ">
 <h1 class="z">Let's get acquainted!</h1>
 <div class="form-message"><?php echo $error; ?></div>
 <input type="text" class ="n" id="name" name="username" required
       minlength="2" maxlength="10" placeholder="Your name">
 <input type="password" class ="p" id="name" name="password" required
       minlength="2" maxlength="10" placeholder="Your password">
  <button  id="start" class="button_start" name="login" type="submit"> START </button>
 <a id="start" class="button_r" href="signup.php">
  <span>REGISTRATION</span>
</a>
 </form>

</body>
</html>

