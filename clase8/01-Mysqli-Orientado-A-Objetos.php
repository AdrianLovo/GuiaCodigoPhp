<?php

	/**
	 *	1-Conectarnos
	 *	2-Verificar Conexion
	 *	3-Ejecutar la setencia SQL
	 *	4-Imprimir filas (Datos)
	 *	5-Liberar la memoria de resultados("Opcional")
	 *	6-Cerar la conexion	
	 */
	
	//Numero: 1
	$mysqli = new mysqli('localhost','root','root','tienda');


	//Numero: 2
	if($mysqli->errno){	//Verificar si la variable que tiene la conexion es valida
		echo "Fallo al conectar a mysql: " . $mysqli->connect-error . PHP_EOL;
	}


	//Numero 3
	$resultado = $mysqli->query("SELECT nombre, precio FROM productos");	


	//Numero 4
	while($fila = $resultado->fetch_assoc()){	//devuelve las filas la funcion 
		echo $fila['nombre'] . ' cuesta = ' . $fila['precio'] . PHP_EOL;
	}


	//Numero 5
	$resultado->free();

	//Numero 6
	$mysqli->close();
	
