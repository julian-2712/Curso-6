<?php

// Trabajando con valores
/*function greet($name)
{
    return "Hola, $name";
}

echo greet('Julian');
*/

// Trabajando con referencias
$course = 'PHP';
function path(&$course) // El cambio se produce a nivel interno de la función, y también se aplica a la variable que se encuentra fuera de la función
{
    $course = 'Laravel';
    echo "$course<br>"; // Imprime Laravel
}

path($course);
echo $course; // Imprime Laravel
echo "<br>";


// Predeterminado

function greet($name = 'Julian')
{
    return "Hola, $name";
}

echo greet();
echo "<br>";
echo greet('Abel');