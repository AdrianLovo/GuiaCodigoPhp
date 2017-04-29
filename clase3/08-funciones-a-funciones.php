<?php

//Para indicar que es una funcion anonima
function aritmetica(Closure $operacion , $num1 , $num2){
	return $operacion($num1, $num2);
}


//Funcion closure que suma
$sumar = function($num1, $num2){
	return $num1 + $num2;
};

//funcion closure que resta
$restar = function($num1, $num2){
	return $num1 - $num2;
};

echo aritmetica($sumar, 1, 9);