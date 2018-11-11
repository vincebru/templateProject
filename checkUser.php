<?php


// add function to check if user is connected
function isConnected(){
	return isset($_SESSION['userId']);
}

function getConnectedUserId(){
	if(isConnected()){
		return $_SESSION['userId'];
	}
	return null;
}

//if $page needs connected user, check that user id is set in $_SESSION['userId']
//	if needed and not set redirect user to login page ==> $page="login";


//if $page needs specific role on connected user, 
//	check that user associted to $_SESSION['userId'] in database has the role needed

// if for any reason, connexion to $page is not allowed update value of $page to 'notAllowed' (to redirect to view/notAllowed.php)
