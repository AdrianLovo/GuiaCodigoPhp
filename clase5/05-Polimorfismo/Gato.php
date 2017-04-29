<?php
	require_once("AnimalInterface.php");
	
	class Gato implements AnimalInterface{

		public function comer(){
			echo "Gato Come:" . PHP_EOL;
		}

		public function hablar(){
			echo "Gato Dice" . PHP_EOL;
		}

	}