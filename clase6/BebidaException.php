<?php

	//Crear exception personalizada

	class BebidaException extends Exception{

		protected $message = "El alcohol es malo para la salud." . PHP_EOL;

	}