<?php

   //CUando un archivo contendra clases es recomendable que el nombre del archivo sea el mismo de la clases


   //Declaracion de clase
   class Producto{

      //Declaracion de variables
      var $nombre;
      var $talla;
      var $precio = 10; //Valor por defecto todos los productos valdra 10



      //Constructor
      function __construct($nombre , $talla){
         echo "He sido construido! \n";
         $this->nombre = $nombre;
         $this->talla = $talla;
      }


      //Declaracion de metodos
      function resumen(){
         echo "El nombre: {$this->nombre}" . PHP_EOL;
         echo "La talla: {$this->talla}" . PHP_EOL;
         echo "El precio: {$this->precio}" . PHP_EOL;
      }

   }


?>
