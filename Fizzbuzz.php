<?php
$final = (int) readline("Digite o número final: ");

for ($i = 1; $i <= $final; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FizzBuzz</title>
</head>
<body>
	<form method="GET">
		<label for="final">Digite o número final:</label>
		<input type="text" name="final" id="final">
		<button type="submit">Gerar sequência FizzBuzz</button>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$final = filter_input(INPUT_GET, 'final', FILTER_SANITIZE_NUMBER_INT);
		$final = filter_var($final, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 3000)));

		if ($final !== false) {
			for ($i = 1; $i <= $final; $i++) {
			    if ($i % 3 == 0 && $i % 5 == 0) {
			        echo "FizzBuzz<br>";
			    } elseif ($i % 3 == 0) {
			        echo "Fizz<br>";
			    } elseif ($i % 5 == 0) {
			        echo "Buzz<br>";
			    } else {
			        echo "$i<br>";
			    }
			}
		} else {
			echo "Por favor, informe um número válido entre 1 e 3000.";
		}
	}
	?>
</body>
</html>