<?php

// if not is set $productId (potentially initialized in serach.php)
// initialize $productId with $_GET['productId']

//use database connexion (use getDb() function to connect to database)
// to get product information from $productId

//display the product

// add "add to cart" form
?>
<form action='index.php' method='POST'>
	<input type='hidden' name='page' value='addToCart' />
	<input type='hidden' name='productId' value='<?php echo($productId) ?>' />
	<input type='number' min='0' name='quantity' />
	<input type='submit' value='Add to cart' />
</form>