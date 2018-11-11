<?php
//start session
start_session();

//initialize $page variable from $_GET['page'] or $_POST['page']
$page='main'; // default value
if (isset($_GET['page'])){
	$page=$_GET['page'];
} else if(isset($_POST['page'])){
	$page=$_POST['page'];
}

//include database.php file
include('database.php');

//include checkUser.php file
include('checkUser.php');

//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
if (file_exists('action/'.$page.'.php')){
	include ('action/'.$page.'.php');
}

?>
<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<link rel='common.css' type='text/css' href='css/style.css'>
		<?php if(file_exists('css/'.$page.'.css'){
			// add specdific page css if needed
			echo "<link rel='css/".$page.".css' type='text/css' href='css/style.css'>"
		}?>
		<title>emptyProject</title>
	</head>
	<body>
<?php
//using $page decide to include header.php
//eg:
if ($page != 'createAccount'){
	include('view/header.php');
}

if (!file_exists('view/'.$page.'.php')){
	$page='main';
}
include 'view/'.$page.'.php';

//insert the end html envelope (</body></html>)
?>
	</body>
</head>