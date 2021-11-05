<html>
<head>
	<title></title>
	<meta charset=ütf-8>
</head>
<body>
	<form action="switch-statement.php" method="post">
    What was your grade?
    <input type="text" name="grade">
		<input type="submit">
	</form>
	<?php
    $grade = $_POST["grade"];
    echo $grade;
    switch ($grade) {
      case 'A':
        // code...
        echo "You did amazing";
        break;
      case 'B':
        echo "You did pretty good";
        break;
      case 'C':
        // code...
        echo "You got to br careful";
        break;
      case 'F':
        // code...
        echo "You Failed";
        break;
    }
	?>
	</body>
</html>
