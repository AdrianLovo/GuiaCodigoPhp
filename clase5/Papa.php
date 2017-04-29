<?php

	class Papa{
		//ATRIBUTOS
		private $nombre = 'Adrian';
		private $apellido = 'Castillo';
		private $secreto = "Esto es secreto";

		const GENERO = "Masculino";




		//METODOS
		public function cosaProtected(){
			echo "Metodo protected de PAPA";
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function set($atributo , $valor){
			$this->$atributo = $valor;
		}
	}











?>