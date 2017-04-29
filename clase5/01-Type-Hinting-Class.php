<?php

	require_once 'Hijo.php';

	class Familia{

		public function miembro(Hijo $persona){
			echo $persona->nombre . PHP_EOL;
			echo $persona->apellido . PHP_EOL;
		}

	}
 

	//Instanciando hijo
	$persona = new Hijo('Daniel');

	//Usando la clase Familia
	$fam = new Familia();
	$fam->miembro($persona);