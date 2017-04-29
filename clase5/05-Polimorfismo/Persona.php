<?php
	
	require_once('Perro.php');
	require_once('Gato.php');
	require_once('AnimalInterface.php');


	class Persona{

		//Puede recibir diferentes animales
		public function cuida(AnimalInterface $animal){
			$animal->hablar();
			$animal->comer();
		}

	}

	$gato = new Gato();
	//$perro = new Perro();

	$nino = new Persona();
	$nino->cuida($gato);