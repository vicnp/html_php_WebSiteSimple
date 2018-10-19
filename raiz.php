<!DOCTYPE html>
<html>
<head>
	<title>Fórmula de Báscara</title>
</head>
<body>

	<form action="raiz.php" method="POST">
		ENTRADA DE AX²: <input name="n1" type"text"><br>
		ENTRADA DE BX : <input name="n2" type"text"><br>
		ENTRADA DE C  : <input name="n3" type"text"><br>

		<input type="submit" name="calcular" value="Calcular!">
	</form>

<?php
	error_reporting(0);
	$a = $_POST["n1"];
	$b = $_POST["n2"];
	$c = $_POST["n3"];


	$delta = ($b * $b) - (4 * $a * $c);
	$x1 = ((-$b) - (sqrt($delta))) / (2 * $a);
	$x2 = ((-$b) + (sqrt($delta))) / (2 * $a);


	echo "delta é $delta";
	echo "<br>O 1º resultado é $x1<br>";
	echo "<br>O 2º resultado é $x2<br>";
?>

</body>
</html>