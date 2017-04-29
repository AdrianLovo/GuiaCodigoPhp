<?php

	/**
	 *	PDO: API
	 * 
	 */
	
	try{

		$pdo = new PDO('mysql:host=127.0.0.1; dbname=tienda',
						'root',
						'root'
		);

		$sql = "SELECT * FROM productos";
		$resultado = $pdo->query($sql);

		foreach ($resultado as $fila) {
			echo "{$fila['nombre']} vale {$fila['precio']}" . PHP_EOL;
		}

		$pdo = null;


	} catch (PDOException $e) {
    	echo 'Error!: ' . $e->getMessage() . PHP_EOL;

	} finally {
    	$pdo = null;
	}
	







