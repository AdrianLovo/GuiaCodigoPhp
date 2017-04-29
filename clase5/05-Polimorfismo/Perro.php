<?php
	require_once("AnimalInterface.php");
	
	class Perro implements AnimalInterface{

		public function comer(){
			echo "Perro come:" . PHP_EOL;
		}

		public function hablar(){
			echo "Perro dice:" . PHP_EOL;
		}

	}