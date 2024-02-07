<?php 

$data = 'Estudio PHP';

echo $data[0]; // Muestra la primera letra de la cadena de texto data
// echo $data{0};

// $post = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet ea explicabo maxime temporibus debitis unde ipsa numquam quidem, possimus a necessitatibus mollitia quae deserunt molestiae ipsum cum, consequatur vero itaque.";
// $extract = substr($post, 0, 20);

// echo "$extract ...";

/*
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);
*/

/*
$courses = ['javascript','php','laravel'];
echo implode(', ', $courses);
*/

$course = "   Curso de PHP   ";
// $course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
echo "</pre>";