<?php

require('functions.php');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['Id'])) {
	session_unset();
	session_destroy();
	header('Location: login.php?');
}

if (isset($_SESSION['pid'])) {
	$_SESSION['pid'] = null;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order Confirmed || Cheems</title>

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

<!-- Top Nav -->

<nav class="navbar">
	<div class="navbarlogo"><img src="images/doge.png" alt="Doge Logo" class="logo" /></div>
	<div class="navbarbuttons"><p>Hello Select your Address</p></div>
	<div class="navbarsearch"><div class="searchcategory"><p>All</p></div><input type="text" name="" class="searchbox" /><div class="searchbutton" /><img src="images/searchicon.png" alt="SB" class="searchlogo" /></div></div>
	<div class="navbarbuttons"><img src="images/flag.jpg" alt="Flag" class="flagimage" /></div>
	<a href="<?php if(isset($_SESSION['Id'])){echo 'logout.php';} else{echo 'login.php';}?>"><div class="navbarspecialbuttons"><p><span class="smalltext">Hello, <?php echo $_SESSION['Name'] ?? 'Sign In' ?></span><br />Accounts and Lists</p></div></a>
	<div class="navbarspecialbuttons"><p><span class="smalltext">Returns</span><br />&amp; Orders</p></div>
	<div class="navbarbuttons"><p>Cart &nbsp;<span class="zero">0</span></p></div>
</nav>

<img src="images/dogelogin.png" alt="Logo" class="logologinpage" />

<div class="addedtocartholder">
	<p>Thank You for Shopping with us</p>
	<br />
	<p class="mediumtext">Your order will reach to you shortly</p>
	<a href="index.php"><div class="proceedtocheckoutbutton">Back to Home</div></a>
</div>
</body>
</html>