<?php

if (isset($_POST['addAccount'])){
	// get account information from $_POST

	//add line to database using new account information 
	//	NB:use getDb() function to connect to database
	//  NB2: no need to include database.php file, inclusion is already manage from index.php

	// if addAccount failed for any reason you can create an error message in $errorMessage

	// add userId to $_SESSION['userId']
	$_SESSION['userId']=getDb->lastInsertId();

	// else update $page to 'main'. It will permit to redirect user to main page
}