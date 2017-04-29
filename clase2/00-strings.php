<?php

$nombreProducto = 'Polo de CSS';
var_dump($nombreProducto);

$nombreProducto = "Polo de CSS";
var_dump($nombreProducto);

$valor = 'Polo de JS';
$primero = 'Quiero un $valor';
$segundo = "Quiero un $valor";
var_dump($primero);
var_dump($segundo);

//Como buena practica
//Es una forma mas legible y utili de indicar que es un variable
//CUando se trata de arrays es obligacion poner dichas llaves
$resultado = "Quiero un {$valor}";
var_dump($resultado);