<?php
include_once 'functions.php';

echo <<<_END
<!DOCTYPE html>
<html>
	<head>
		<title>$appname</title>
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="script/myscript.js"></script>
	</head>

	<body>
			<h1 class="title">$appname</h1>
			<a href="index.php">Home<a/>
			<div>
				Balance : <span id="bal">$balance</span><br />
				Loan : <span id="loan">$loan</span><br />
				<input type="button" value="Borrow Money" onClick="add_money();" />
				<input type="button" value="Repay Money" onClick="sub_money();" />
			</div>
	</body>
</html>

_END;
?>
