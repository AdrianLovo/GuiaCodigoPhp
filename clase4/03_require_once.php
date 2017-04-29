<?php

   //require = identico a include pero si falla la inclusion arroja un warning

   require_once 'suma.php';
   require_once 'suma.php';   //Lo incluye solo 1 vez aunque este 2 veces o más

   $resultado = suma(5,5);
   var_dump($resultado);



 ?>
