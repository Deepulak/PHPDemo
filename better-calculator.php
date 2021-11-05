<html>
<head>
	<title></title>
	<meta charset=ütf-8>
</head>
<body>
	<form action="better-calculator.php" method="post">
		First Number: <input type="number" step="0.001" name="num1"><br>
		OP: <input type="text" name="op"><br>
		Second Number : <input type="number" step="0.001" name="num2"><br>
		<input type="submit">
	</form>
	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$op = $_POST["op"];

		if ($op == "+") {
			echo $num1 + $num2;
		} elseif ($op == "-") {
			echo $num1 - $num2;
		} elseif ($op == "*") {
			echo $num1 * $num2;
		} elseif ($op == "/"){
			echo $num1 / $num2;
		} else {
			echo "Invalid Operator";
		}
	?>
	</body>
</html>
