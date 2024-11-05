<?php
    $emptyinput = "";
    $invalidusername = "";
    $passwordnotmatch = "";
    $usernameexists = "";

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            $emptyinput = "Fill in all fields";
        }
        else if ($_GET["error"] == "invalidusername") {
            $invalidusername = "Forbidden symbols in username";
        }
        else if ($_GET["error"] == "passwordnotmatch") {
            $passwordnotmatch = "Passwords don't match";
        }
        else if ($_GET["error"] == "usernameexists") {
            $usernameexists = "This username already exists";
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
<form action="signup.inc.php" method="post" id="createAccount" class='green-container'>
 <img class="i" src="images/logo.png" width="483" height="256" alt=" ">
 <h1 class="z">Let's get acquainted!</h1>
<div class="form-message"><?php echo $emptyinput ?></div>
 <input type="text" class ="n" id="name" name="username" required
       minlength="2" maxlength="10" placeholder="Your name">
<div class="form-input-error-message"><?php echo $usernameexists ?></div>
<div class="form-input-error-message"><?php echo $invalidusername ?></div>
 <input type="password" class ="p" id="name" name="password" required
       minlength="2" maxlength="10" placeholder="Your password">
<div class="form-input-error-message"></div>
 <input type="password" class ="pp" id="name" name="password_repeat" required
       minlength="2" maxlength="10" placeholder="Confirm your password">
<div class="form-input-error-message"><?php echo $passwordnotmatch ?></div>
  <button  id="reg" class="button_reg"  name="signup" type="submit"> REGISTER </button>
</a>
 </form>

</body>
</html>

