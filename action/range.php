<?php

// set $productList 
// by connecting to database to find products associated to $_POST['rangeId'] 
// NB: $_POST['rangeId'] commes from form defined in header.php

// if $productList contains only one product, update $page to 'product' 
//		in order to display the unique product found
// initialize $productId value with the id of the unique product found

// else update $page to 'productList'to display the lit of products