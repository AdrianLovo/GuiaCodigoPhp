<?php

//Grupo de instrucciones empaquetadas en un bloque de llaves con un nombre que pueden llamarse multiples veces

echo (saludar("Adrian"));

function saludar($nombre){
	$saludo = "Hola" . $nombre . PHP_EOL;
	return $saludo;
}

