<?php

//Especificar el tipo de datos en los parametros
//Si el parametro que se envia a la funcion no coincide no coincide con el tipo de dato especificado PHP arroja un error fatal

function saludar(array $colores){
	foreach($colores as $valor){
		echo " {$valor} \n";
	}
}

saludar(['Rojo' , 'Verde']);
