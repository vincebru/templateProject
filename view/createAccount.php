<?php

//check if error message was initialized on action/createAccount.php
if (isset($errorMessage)){
	//display the error message
}

// display createAccount form
?>
<form action='index.php' method='POST'>
	<input type='hidden' name='page' value='createAccount' />
	<input type='hidden' name='addAccount' value='true' />

	<input type='submit' value='GO' />
</form>