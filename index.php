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
			Money : $1000 <br />
			Food : 1000
		<div>		
	</body>
</html>
_END;
?>