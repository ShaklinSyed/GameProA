<?php
include_once 'lib.php';

echo <<<_END
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>$appname</title>
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="script/myscript.js"></script>
	</head>

	<body>
			<h1 class="title">$appname</h1>
			<a href="index.php">Home<a/>
			<div>
				<form name="alpha">
				Balance : <label id="bal">$balance</label><br />
				Loan : <label id="loan">$loan</label><br />
				<input type="button" value="Borrow Money" onClick="callCredit();" />
				<input type="button" value="Repay Money" onClick="callDebit();" />
				</form>
			</div>
	</body>
</html>

_END;
?>
