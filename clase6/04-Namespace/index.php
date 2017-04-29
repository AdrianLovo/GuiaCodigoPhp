<?php

	require_once('EscuelaD/Estudiante.php');

	$estudiante1 = new EscuelaD\Estudiante("Rafael");

	echo $estudiante1->saludar() .PHP_EOL;
