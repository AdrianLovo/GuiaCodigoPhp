<?php declare(strict_types = 1);//Nos indica que sera estricto con respecto a todos los tipos. lOS DATOS ENVIADOS Y RECIBIDOS

   $numero = 10;

   function suma(int $x, int $y) : int {  //" : int " nos indica que el return debe ser de tipo int

      // global $numero;   Para utilizar variables gloables fuera de ambito

      return ($x + $y);
   }

   //var_dump(suma(2,2));

?>
