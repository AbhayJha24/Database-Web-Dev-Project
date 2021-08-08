<?php

require('dbconnect.php');
require('product.php');

$db = new dbcontroller();

$product = new Product($db);

?>