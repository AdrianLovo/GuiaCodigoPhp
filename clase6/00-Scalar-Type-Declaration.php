<?php declare(strict_types = 1);
	

	//Para "..."" indicar que enviaremos varios valores en formato de array
	function bienvenida(...$nombres){
		//$nombres = func_get_args();

		foreach ($nombres as $nombre) {
			echo "Bienvenido: {$nombre} " . PHP_EOL;
		}
	}


	bienvenida("Carlos", "Adrian");

	//Para indicar que seran de tipo int
	function sumaDeEnteros(int ...$enteros){
		return array_sum($enteros);
	}

	echo sumaDeEnteros(1,2,3,4,5);