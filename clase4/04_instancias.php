<?php

   require_once 'Producto.php';

   $producto = new Producto();

   $producto->nombre = 'Camisa';
   $producto->talla = 'M';
   $producto->precio = 12;

   //Acceder a las propiedades
   //var_dump($producto->nombre);
   //var_dump($producto->talla);
   //var_dump($producto->precio);


   $producto->resumen();
   


?>
