<?php

	require_once 'BebidaException.php';

	function beber($bebida){

		if($bebida == 'cerveza'){
			//throw new Exception("El Acohol es malo");			
			throw new BebidaException;
		}

		return "Bebiendo {$bebida}". PHP_EOL;

	}

	//echo beber("cerveza");