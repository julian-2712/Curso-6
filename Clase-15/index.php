<?php

/*
$frontend = [
    'frontend' => 'JavaScript'
];
$backend = [
    'backend' => 'PHP',
    'framework' => 'Laravel'
];

echo "<pre>";
var_dump($frontend + $backend); // Se sobreescribe si el array no tiene keys, sin 'frontend' ni 'backend', JavaScript y PHP tendrían la key 0, por ello se sobreescribiría
echo "</pre>";
*/

/*
$frontend = ['JavaScript'];
$backend = ['PHP','Laravel'];

echo "<pre>";
var_dump(array_merge($frontend,$backend)); // Al tener keys numéricos, se combinan sin problema
echo "</pre>";
*/

/*
$frontend = [
    'a' => 'JavaScript'
];
$backend = [
    'a' => 'PHP',
    'b' => 'Laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontend,$backend)); // Encapsula en un mismo grupo los elementos que tienen la misma key
echo "</pre>";
*/


$courses = ['JavaScript','PHP','Laravel'];
$categories = ['frontend','backend','framework'];

echo "<pre>";
var_dump(array_combine($categories,$courses)); // Permite combinar arrays, usa el primero para determinar las keys y el segundo como sus valores
echo "</pre>";