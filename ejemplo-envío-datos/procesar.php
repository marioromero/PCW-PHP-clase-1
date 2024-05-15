<?php

echo "están llegando las variables";

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$op = $_GET['op'];

//echo "$valor1 / $valor2";

if ($op == "suma") {
	echo "el resultado es ". $valor2 + $valor1;
}
elseif ($op == "resta") {
	echo "el resultado es ". $valor1 - $valor2;
}