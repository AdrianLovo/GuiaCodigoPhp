<?php

//Los ciclos no siempre nos interesa que terminen 
// Break y continue
// 
// break: finaliza la ejecucion de la estructura
// for, foreach, while, do-while, switch

$colores = ['rojo' ,  'verde'];


//Break
foreach ($colores as $posicion => $valor) {
	echo "La posicion {$posicion} el color es {$valor} ,\n";
	break;
	echo "Esto no llega a ejecutarse";
}


//Continue
for($i= 0 ; $i < 10 ; $i++){
	if($i%2 == 0){
		echo "EL numero {$i} es par \n";
	}else{
		continue;
	}
}