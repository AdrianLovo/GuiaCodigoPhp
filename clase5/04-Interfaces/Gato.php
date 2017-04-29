<?php
	require_once("AnimalInterface.php");
	
	class Gato implements AnimalInterface{

		public function comer($comida){
			echo "Comiendo: {$comida}" . PHP_EOL;
		}

		public function hablar($mensaje){
			echo "Hola: {$mensaje}" . PHP_EOL;
		}

	}

	$bills = new Gato();
	$bills->comer("puddim");
	$bills->hablar("Quiero mas");