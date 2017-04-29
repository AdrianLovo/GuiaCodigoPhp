<?php

//Casting
//COnvertir un tipo de dato a otro tipo de dato

$polos = '4';
var_dump($polos);

//Cast de datos 
$polos = (int) $polos;
var_dump($polos);


//cast a float
$polos = (float) $polos;
var_dump($polos);

//cast float a string
$pi = 3.1416;
$pi = (string) $pi;
var_dump($pi);


//Los arrays son un caso especial
$pi = (array) $pi;
var_dump($pi);
