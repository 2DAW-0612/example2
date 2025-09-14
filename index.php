<!DOCTYPE html>
<html>
	<head>
		<title>DAW. MP0612. Example2</title>
	</head>
	<body>
		<h1>Simple Php Calculator</h1>
		<form method="POST">
			<label for="num1">Number 1:</label>
			<input type="number" id="num1" name="num1" required>
			<label for="num2">Number 2:</label>
			<input type="number" id="num2" name="num2" required>
			<button type="submit"> Sum</button>
		
		</form>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$result = $num1 + $num2;
				echo "<p>The sum is: $result</p>";
			}
		?>
	</body>
</html>