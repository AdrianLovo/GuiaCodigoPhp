<?php 

	require_once 'Papa.php';


	class Hijo extends Papa{

		public static $abuelos;

		function __construct($nombre){
			$this->nombre = $nombre;
		}

		public static function saludar(){
			echo "Saludo";
		}

	}




?>