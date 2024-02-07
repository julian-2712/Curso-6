<?php

$courses = [
    'frontend' => 'JavaScript',
    'framework' => 'Laravel',
    'backend' => 'PHP',
];

/*
echo "<pre>";
var_dump($courses);
echo "</pre>";
*/

/*
foreach ($courses as $course) {
    echo "$course <br>";
}
*/

function upper($course, $key)
{
    echo strtoupper($course) . ": $key<br>";
}

array_walk($courses, 'upper');
echo "<br>";

/**
* array_key_exists('frontend', $courses); --> Comprueba si el elemento frontend existe en el array courses, si es así, devuelve el valor true
* in_array('JavaScript', $courses) --> Busca a nivel de valores, si existe JavaScript
* array_keys($courses) --> Muestra todos los keys
* array_values($courses) --> Muestra todos los valores
*/

//devuelven 1 ó 0
echo array_key_exists('frontend', $courses);    
echo "<br>";
echo in_array('java', $courses);            

echo "<br>";

//imprime llaves y valores
print_r(array_keys($courses));
echo "<br>";
print_r(array_values($courses));