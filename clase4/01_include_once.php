<?php
   //Include_once = incluye 1 sola vez y corre todo el archivo que agregamos
   //Los archivos agregados el codigo hereda todo el ambito de las variables en la linea en la que ocurre la inclusion

   Include_once 'suma.php';

   $resultado = suma(5,5);
   var_dump($resultado);



?>
