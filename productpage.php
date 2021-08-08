<?php 

require('functions.php');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['Id'])) {
	session_unset();
	session_destroy();
	header('Location: login.php');
}

$itemid = $_GET['item_id'];

$_SESSION['pid'] = ($product->getTableData()[$itemid]['Pid']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Name || Cheems</title>

	<!-- CSS File Link -->

	<link rel="stylesheet" href="style.css" />

	<!-- Favicon Link -->

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon" />

	<!-- Meta Data -->

	<meta name="description" content="E Commerce Web Site" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- JS -->

	<script type="text/javascript">
		function imgchange(x) {
			document.getElementById('productpagebigimg').src = x;
		}

		function sub() {
			document.getElementById('buyform').submit();
		}
	</script>
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

<!-- Product Left Side Image -->

<div class="productbigimageholder">
	<img src="images/<?php print_r($product->getTableData()[$itemid]['Name']); ?>.jpg" class="productpagebigimg" id="productpagebigimg" alt="Product" />
	<br />
	<br />
	<p>Hover over an image to see it in full size</p>
	<br />
	<br />
	<img src="images/<?php print_r($product->getTableData()[$itemid]['Name']); ?>.jpg" class="productpagesmallimgleftmost" onmouseover="imgchange(this.src);" />
	<img src="images/<?php print_r($product->getTableData()[$itemid]['Name']); ?>2.jpg" class="productpagesmallimg" onmouseover="imgchange(this.src);" />
	<img src="images/<?php print_r($product->getTableData()[$itemid]['Name']); ?>3.jpg" class="productpagesmallimg" onmouseover="imgchange(this.src);" />
</div>

<div class="productinfo">
	<p><span class="bigtextnofontweight"><?php print_r($product->getTableData()[$itemid]['Name']); ?></span></p>

	<div class="fakehr"></div>
	<br />
	<br />
	<p>Price:&nbsp;<span class="price">₹<?php print_r($product->getTableData()[$itemid]['Price']); ?></span></p>
	<br />
	<p class="incalltaxes">Inclusive of all Taxes</p>
	<br />
	<br />
	<br />
	<p class="despatchinfo">Usually dispatched in 2 to 3 days</p>
	<div class="fakehr"></div>
	<br />
	<br />
	<img src="returnicon.jpg" alt="Return" class="returnicon" />
	<div class="returnable"><p>10 Days <br /> Returnable</p></div>

</div>
</div>

<div class="purchaseoptions">
	<form action="orders.php" method="POST" id="buyform">
		<label>Quantity:</label>
		<select name="quantity">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		<br />
		<div class="addtocartbutton">Add to Cart</div>
		<div class="buybutton" onclick="sub();">Buy Now</div>
		<p><img src="ssl.jpg" alt="Secure" class="secureicon" /><span class="securetransaction">Secure Transaction</span></p>
	</form>
</div>



</body>
</html>