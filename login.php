<?php 

if (session_status() == PHP_SESSION_ACTIVE) {
    session_unset();
	session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login || Cheems</title>

	<!-- CSS File Link -->

	<link rel="stylesheet" href="style.css" />

	<!-- Favicon Link -->

	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon" />

	<!-- Meta Data -->

	<meta name="description" content="E Commerce Web Site" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<img src="images/dogelogin.png" alt="Logo" class="logologinpage" />
<br />
<div class="loginbox">
	<form action="checklogin.php" method="POST">
		<p><span class="bigtext">Sign-In</span></p>
		<br />
		<label class="loginformlabels">Email or mobile phone number</label>
		<input type="text" name="email" required class="loginforminputs" />
		<br />
		<br />
		<label class="loginformlabels">Password</label>
		<input type="password" name="pass" required class="loginforminputs" />
		<br />
		<br />
		<br />
		<input type="submit" name="submit" value="Sign-In"class="loginbutton" />
	</form>
</div>

<br />
<br />
<br />
<br />

<hr />

<p><span class="copyrighttext">© Cheems Online Shopping <?php echo date('Y') ?></span></p>

