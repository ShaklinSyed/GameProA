<?php
//signup.php
include_once 'functions.php';

echo <<<END

<!DOCTYPE html>

<html>
	<head>
		<title>$appname</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<h1 class="title">$appname</h1>
		<div id='signup_container'>
		<form action='signup.php' method='POST'>
			<input type='text' name='username' placeholder='Username'/> <br />
			<input type='text' name='password' placeholder='Password'/> <br />
			<input type='text' name='repass' placeholder='Re-type Password'/> <br />
			<input type='submit' value='SignUp' />
		</form>
		<div>
	</body>
</html>
	
END;
?>