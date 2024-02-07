<?php

/*
$greet = function ($name) // Se usa en una variable que requiere lógica
{
    return "Hola, $name";
};

echo $greet('Julian');
*/

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo greet($es, 'Esteban');
echo "<br>";
echo greet($en, 'Anthony');
