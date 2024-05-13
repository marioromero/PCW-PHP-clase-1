<?php
//variables
$nombre = "Juan";
$edad = 30;
$esMayorDeEdad = true;
echo "Nombre: $nombre, Edad: $edad, Mayor de edad: $esMayorDeEdad";

//operadores
$a = 10;
$b = 3;
echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";

//comparación

$a = 5;
$b = '5';
echo "Comparación de igualdad sin tipo: " . ($a == $b) . "\n";  // Verdadero
echo "Comparación de igualdad con tipo: " . ($a === $b) . "\n"; // Falso

//lógicos

$a = true;
$b = false;
echo "AND lógico: " . ($a && $b) . "\n"; // Falso
echo "OR lógico: " . ($a || $b) . "\n";  // Verdadero

//clases y objetos

class Coche {
    public $color;
    public $modelo;

    public function __construct($color, $modelo) {
        $this->color = $color;
        $this->modelo = $modelo;
    }

    public function mostrarInfo() {
        echo "Coche: $this->modelo, Color: $this->color";
    }
}

$miCoche = new Coche("rojo", "Toyota");
$miCoche->mostrarInfo();

//arrays
$edades = array("Juan" => 30, "Ana" => 22, "Carlos" => 45);
echo "La edad de Ana es " . $edades["Ana"]; // Muestra "La edad de Ana es 22"


//estructuras
$edad = 20;

if ($edad < 18) {
    echo "Eres menor de edad.";
} else if ($edad == 18) {
    echo "Justo tienes 18 años.";
} else {
    echo "Eres mayor de edad.";
}

$calificacion = 'A';

switch ($calificacion) {
    case 'A':
        echo "Excelente!";
        break;
    case 'B':
        echo "Muy bien!";
        break;
    case 'C':
        echo "Bien, pero podría mejorar.";
        break;
    case 'D':
        echo "Necesitas trabajar más duro.";
        break;
    default:
        echo "Calificación no válida.";
}

$contador = 1;

while ($contador <= 5) {
    echo "Iteración $contador\n";
    $contador++;
}

$contador = 1;

do {
    echo "Iteración $contador\n";
    $contador++;
} while ($contador <= 5);


for ($i = 1; $i <= 5; $i++) {
    echo "Iteración $i\n";
}

$colores = array("rojo", "verde", "azul");

foreach ($colores as $color) {
    echo "Color: $color\n";
}