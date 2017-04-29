<?php

//Arrays indexados
// Son un conjunto de valores agrupados

//Forma 1
$colores = array('rojo' , 'verde' , 'azul');

//Forma 2
$lenguajes = ['php' , 'java' , 'visual basic'];

var_dump($colores);
var_dump($lenguajes);


//Agregando valores de variables a un array
$uno = 1;
$dos = 2;
$tres = 3;

$valores = [$uno , $dos , $tres];
var_dump($valores);


//Un array puede tener diferentes tipos de valores
$mescla = ['Uno' , 1 , 1.0];
var_dump($mescla);


var_dump($mescla[0]);


//SI intentamos acceder a una posicion que no existe, tendremos un error PHP







