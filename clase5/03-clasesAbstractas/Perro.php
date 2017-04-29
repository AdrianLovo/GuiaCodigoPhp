<?php
	require_once("Animal.php");


	class Perro extends Animal{

		public function hablar(){
			echo "Hola desde perro";
		}

	}

	$perro = new Perro();
	$perro->saludar();