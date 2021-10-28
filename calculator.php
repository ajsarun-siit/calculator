<html>
<body>
<?php 
	$number1 = $_REQUEST["number1"];
	$number2 = $_REQUEST["number2"];
	$result = 0;
	$operation = "";
	if (isset($_REQUEST["add"])) { 
		$result = $number1 + $number2;
		$operation = "Addition";
	} elseif(isset($_REQUEST["subtract"])) {
		$result = $number1 - $number2;
		$operation = "Subtraction";
	} elseif(isset($_REQUEST["multiply"])) {
		$result = $number1 * $number2;
		$operation = "Multiplication";
	} else {
		if ($number2 == 0) {
			$result = "N/A";
			$operation = "Fail to calculate";
		}
		else {
			$result = $number1 / $number2;
			$operation = "Division";	
		}
	}
	echo "<h1>";
	echo "$operation: The result is $result";
	echo "</h1>";  
?>
</body>
</html>
