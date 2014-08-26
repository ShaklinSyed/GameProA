<?php
//index.php
include_once 'functions.php';

echo <<<_END
<!DOCTYPE html>
<html>
	<head>
		<title>$appname</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
			<h1 class="title">$appname</h1>

		<div id="stats">
			Money : \$$balance 
			<hr />
			Resource <br />
			Food : $food <br />
			Wood : $wood
		</div>	
		<a href='finance.php'>Finance</a>
	</body>
</html>
_END;
?>