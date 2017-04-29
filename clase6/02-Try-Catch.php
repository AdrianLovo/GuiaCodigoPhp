<?php

	require_once '01-Throwing.php';

	try {
		beber('cerveza');

	} catch (BebidaException $e) {
		echo "Atrapamos un exception de bebida " . $e->getMessage() . PHP_EOL;
	}finally{
		echo "No se pudo ejecutar el bloque anterior de codigo " . PHP_EOL;
	}

	echo "Fin";



