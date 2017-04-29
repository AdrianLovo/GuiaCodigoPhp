<?php namespace EscuelaD;

	
	//El espacio de nombre es igual a la carpeta que contiene la clase por convencion


	class Estudiante{
		private $nombre;

		public function __construct($nombre){
			$this->nombre = $nombre;			
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function saludar(){
			return "Hola mi nombre es: {$this->nombre} y soy de namespace EscuelaD";
		}

	}
