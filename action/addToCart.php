<?php

//initialize $productId, $quantity from $_POST['productId'] and $_POST['quantity']


// check if cart already exists in database for current user (use getConnectedUserId() function)
// 	 add a cart for current user if needed

// check if $productId is already associated to current cart in database
//  add or update link to product from cart 


// if add product to cart failed for any reason 
//		you can create an error message in $errorMessage and update $page to 'main'
// else
//		update $page to cart