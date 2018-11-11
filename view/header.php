<?php
// if connected user add link to createAccount page
if(isConnected()){
	// display connected user infrormation
} else {
	//display login form
	// add link to createAccount page
	echo "<a href='index.php?page=createAccount'>Create account</a>"
}

// display search form
<form action='index.php' method='POST'>
	<input type='hidden' name='page' value='search' />
	<input type='text' name='searchValue' />

	<input type='submit' value='GO' />
</form>

// add link to cart
<a href='index.php?page=cart'>cart</a>

// for each range products add link to it
<a href='index.php?page=range&rangeId<?php echo $rangeId ?>'>cart</a>