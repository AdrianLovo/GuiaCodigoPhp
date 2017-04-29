<?php

	//Prepare Statement
	//
	// * Solo necesita preparar la consulta 1 vez y utilizar n veces (Ya esta preparada) 
	// * Los parametros no necesitan estar entre comillas 
	// * Evita sql injection
	 
	 
	//1-Conectarnos
	$mysqli = new mysqli('localhost','root','root','tienda');

	//2-Verificar Conexion
	if($mysqli->errno){	//Verificar si la variable que tiene la conexion es valida
		echo "Fallo al conectar a mysql: " . $mysqli->connect-error . PHP_EOL;
	}

	//3-Preparar parametros
	$sql = "INSERT INTO productos (nombre, talla, precio) VALUES (?,?,?)";
	$sentencia = $mysqli->prepare($sql);
	if(!$sentencia){
		echo "Fallo a preparacion: ({$mysqli->errno}) {$mysqli->error} " . PHP_EOL;
	}

	//4-Vincular parametros
	
	//i Para enteros
	//s string
	//d double
	//b blob
	$nombre = 'Camiseta java';
	$talla = 'S';
	$precio = 2000;

	if(!$sentencia->bind_param('ssi', $nombre, $talla, $precio)){
		echo "Fallo la vinculacion de parametros: ({$mysqli->errno}) {$mysqli->error} " . PHP_EOL;
	}

	//5-Imprimir datos 	No devuelve ya que solo vamos a insertar
	
	//6-Ejecutar
	if(!$sentencia->execute()){
		echo "Fallo la ejecucion: ({$mysqli->errno}) {$mysqli->error} " . PHP_EOL;
	}else{
		echo "{$sentencia->affected_rows} Fila insertadas" . PHP_EOL;
	}

	//7-cerrar la coenxion
	//$mysqli->close();



	//Para eliminar el id autoincrementado
	//TRUNCATE Table nombreTabla







	//Preparara
	$sql = 'SELECT nombre, precio FROM productos';
	$sentencia2 = $mysqli->prepare($sql);
	//Vincular 	no es necesario vincular nada para esta sentencia
	
	//Ejecutar
	$sentencia2->execute();

	//Vincular las variables de resultados
	$sentencia2->bind_result($nombre, $precio);

	//Usar datos
	while($fila = $sentencia2->fetch()){
		echo "Nombre: {$nombre}  Costo= {$precio} ".PHP_EOL;
	}

	//Cerrar la sentencia
	$sentencia2->close();

	//cerrar la coenxion
	$mysqli->close();














