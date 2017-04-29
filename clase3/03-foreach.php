<?php

//Permite interactuar con arrays de manera facil

$colores = ['rojo' , 'verde'];

foreach ($colores as $elemento) {
	echo "Color: {$elemento} \n";
}

foreach ($colores as $llave => $valor) {
	echo "Color: {$llave} \n";
}


//SIntaxis alternativa para cierre de foreach
foreach ($colores as $elemento):
	echo "Color: {$elemento} \n";
endforeach;