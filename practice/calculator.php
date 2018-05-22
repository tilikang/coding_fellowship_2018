<html>

<h1>**Sami's Awesome Calculator**</h1>

<?php

function Add($variable1, $variable2) {
	return $variable1 + $variable2;
}

function Subtract($variable1, $variable2) {
	return $variable1 - $variable2;
}

function Multiply($variable1, $variable2) {
	return $variable1 * $variable2;
}

function Divide($variable1, $variable2) {
	return $variable1 / $variable2;
}

$Test = "Hello! Here's a calculator. Please type the numbers, and choose an operation.";

echo "$Test ";

echo "
	<form action = '' >
		<input type='text' name='variable1' />
		<input type='text' name='variable2' />
		<input type='submit' />
	</form>
";

// Add function
if(isset($_REQUEST['variable1'])) {
	echo "You input the numbers: $_REQUEST['variable1'], $_REQUEST['variable2']";
	echo "The answer is: " .Add($_REQUEST['variable1'], $_REQUEST['variable2']);
}

?>

</html>
