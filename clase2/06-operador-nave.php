<?php

//Emplea una unica expresion para evaluar 2 expresiones

var_dump( 1 <=> 1); //0		Cuando son iguales
var_dump( 1 <=> 2); //-1	Cuando el Primero es Menor al Segundo
var_dump( 2 <=> 1); //1		Cuando el Primero es Mayor al Segundo

var_dump( 'a' <=> 'b');