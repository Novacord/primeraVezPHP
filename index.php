<?php
/**
 ** Funciones de salida en PHP
 */

 /**
  * @param echo 'hola mundo', escribe en el documento el texto escrito en este caso hola mundo
  */

  echo 'hola mundo';


 /**
  * @param printf ('hola mundo'), escribe en el documento el texto escrito en este caso hola mundo
  */

    printf('hola Mundo');

 /**
  * @param sprintf ('hola mundo'), te arma el texto escrito en este caso hola mundo y se puede guardar en una variable
  */

  $texto = 'mundo';
  $mensaje = sprintf('hola',$texto);
  echo $mensaje;
?>