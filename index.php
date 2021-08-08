<?php

require('functions.php');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_SESSION['pid'])) {
	$_SESSION['pid'] = null;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheems Online Shopping Site in India</title>

	<!-- CSS File Link -->

	<link rel="stylesheet" href="style.css" />

	<!-- Favicon Link -->

	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon" />

	<!-- Meta Data -->

	<meta name="description" content="E Commerce Web Site" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body id="commonbody">

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

<!-- Image Slider -->

<div id="imagediv" class="imagediv">
<div class="slider">
<img src="images/top1.jpg" alt="Top1" class="img" />
<a href="productpage.php?item_id=14"><img src="images/top2.jpg" alt="Top2" class="img" /></a>
<img src="images/top3.jpg" alt="Top3" class="img" />
<img src="images/top4.jpg" alt="Top4" class="img" />
<img src="images/top5.jpg" alt="Top5" class="img" />
</div>
</div>

<!-- Product Boxes -->

<div class="productleftmost">Deals of the Day<br /><br /><div class="productholder1"><a href="productpage.php?item_id=0"><img src="images/<?php print_r($product->getTableData()[0]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[0]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=1"><img src="images/<?php print_r($product->getTableData()[1]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[1]['Name']); ?></span></p></div><div class="productholder1"><a href="productpage.php?item_id=2"><img src="images/<?php print_r($product->getTableData()[2]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[2]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=3"><img src="images/<?php print_r($product->getTableData()[3]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[3]['Name']); ?></span></p></div></div>

<div class="product">Office Fitness | Entertainment<br /><br /><div class="productholder1"><a href="productpage.php?item_id=4"><img src="images/<?php print_r($product->getTableData()[4]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[4]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=5"><img src="images/<?php print_r($product->getTableData()[5]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[5]['Name']); ?></span></p></div><div class="productholder1"><a href="productpage.php?item_id=6"><img src="images/<?php print_r($product->getTableData()[6]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[6]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=7"><img src="images/<?php print_r($product->getTableData()[7]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[7]['Name']); ?></span></p></div></div>

<div class="product">Home Products<br /><br /><div class="productholder1"><a href="productpage.php?item_id=8"><img src="images/<?php print_r($product->getTableData()[8]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[8]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=9"><img src="images/<?php print_r($product->getTableData()[9]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[9]['Name']); ?></span></p></div><div class="productholder1"><a href="productpage.php?item_id=10"><img src="images/<?php print_r($product->getTableData()[10]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[10]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=11"><img src="images/<?php print_r($product->getTableData()[11]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[11]['Name']); ?></span></p></div></div>

<div class="product">Flat 25&percnt; off<br /><br /><div class="productholder1"><a href="productpage.php?item_id=12"><img src="images/<?php print_r($product->getTableData()[12]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[12]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=13"><img src="images/<?php print_r($product->getTableData()[13]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[13]['Name']); ?></span></p></div><div class="productholder1"><a href="productpage.php?item_id=14"><img src="images/<?php print_r($product->getTableData()[14]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[14]['Name']); ?></span></p></div><div class="productholder2"><a href="productpage.php?item_id=15"><img src="images/<?php print_r($product->getTableData()[15]['Name']); ?>.jpg" class="productimage" /></a><p><span class="mediumtext"><?php print_r($product->getTableData()[15]['Name']); ?></span></p></div></div>

<!--
<div class="productleftmost">Vega brand days | 11-14th June<br /><br /><div class="productholder1"><img src="images/trimmer.jpg" class="productimage" /><p><span class="mediumtext">Trimmers</span></p></div><div class="productholder2"><img src="images/hairdryer.jpg" class="productimage" /><p><span class="mediumtext">Hair Dryers</span></p></div><div class="productholder1"><img src="images/hairstraightener.jpg" class="productimage" /><p><span class="mediumtext">Hair Straighteners</span></p></div><div class="productholder2"><img src="images/haircurler.jpg" class="productimage" /><p><span class="mediumtext">Hair Curlers</span></p></div></div>

<div class="product">Bestselling smart TVs<br /><br /><div class="productholder1"><img src="images/bedroomtv.jpg" class="productimage" /><p><span class="mediumtext">Bedroom TVs | 32 Inch</span></p></div><div class="productholder2"><img src="images/redmismarttv.jpg" class="productimage" /><p><span class="mediumtext">Redmi Smart TVs: Starting ₹33,999</span></p></div><div class="productholder1"><img src="images/premiumtv.jpg" class="productimage" /><p><span class="mediumtext">Premium TVs</span></p></div><div class="productholder2"><img src="images/alltvs.jpg" class="productimage" /><p><span class="mediumtext">All Televisions</span></p></div></div>

<div class="product">Cheems Brands & more<br /><br /><div class="productholder1"><img src="images/homeproducts.jpg" class="productimage" /><p><span class="mediumtext">Home Products</span></p></div><div class="productholder2"><img src="images/kitchen&amp;dining.jpg" class="productimage" /><p><span class="mediumtext">Kitchen &amp; Dining</span></p></div><div class="productholder1"><img src="images/dailyessentials.jpg" class="productimage" /><p><span class="mediumtext">Daily Essentials</span></p></div><div class="productholder2"><img src="images/clothingessentials.jpg" class="productimage" /><p><span class="mediumtext">Clothing Essentials</span></p></div></div>

<div class="product">Everyday essentials<br /><br /><div class="productholder1"><img src="images/cleaningessentials.jpg" class="productimage" /><p><span class="mediumtext">Cleaning Essentials</span></p></div><div class="productholder2"><img src="images/immunity&amp;healthcare.jpg" class="productimage" /><p><span class="mediumtext">Immunity &amp; Healthcare</span></p></div><div class="productholder1"><img src="images/womenpersonalcare.jpg" class="productimage" /><p><span class="mediumtext">Women's Personal Care</span></p></div><div class="productholder2"><img src="images/mengrooming.jpg" class="productimage" /><p><span class="mediumtext">Men's Grooming</span></p></div></div>
-->

</body>
</html>