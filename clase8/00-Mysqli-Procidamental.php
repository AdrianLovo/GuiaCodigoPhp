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
	$mysqli = mysqli_connect('localhost','root','root','tienda');


	//Numero: 2
	if(mysqli_connect_errno($mysqli)){	//Verificar si la variable que tiene la conexion es valida
		echo "Fallo al conectar a mysql: " . mysqli_connect_error() . PHP_EOL;
	}


	//Numero 3
	$resultado = mysqli_query($mysqli, "SELECT nombre, precio FROM productos");


	//Numero 4
	while($fila = mysqli_fetch_assoc($resultado)){
		echo $fila['nombre'] . ' cuesta = ' . $fila['precio'] . PHP_EOL;
	}


	//Numero 5
	mysqli_free_result($resultado);


	//Numero 6
	mysqli_close($mysqli);











