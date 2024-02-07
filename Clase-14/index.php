<?php

$courses = ['JavaScript','PHP'];
$wishList = ['PHP','Laravel','HTML','JavaScript'];

/*
echo "<pre>";
var_dump(array_diff($wishList, $courses));
echo "</pre>";
*/

$arrayA = [1,2,3,4,5];
$arrayB = [9,4,3,6,5];

/*
echo "<pre>";
var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));
echo "</pre>";
*/

// array_dif_assoc: valores, keys

echo "<pre>";
var_dump(array_diff_assoc($arrayA, $arrayB));
var_dump(array_diff_assoc($arrayB, $arrayA));
echo "</pre>";