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


/**
 * *Variables y constantes
 */

/**
 * *Las variables en PHP se definen usando el símbolo $
 */

/**
 * @param $nombre guarda el string 'Jose' en una variable llamada nombre
 */

  $nombre = 'Jose';
  echo $nombre;

/**
 * *las constantes son variables que no cambia y se declaran define('nombre de la variable en MAYUSCULAS','valor de la variable)
 */

/**
 * @param SALUDO guarda el string 'Hola' y no puede cambiarse
 */

 define('SALUDO','Hola');
 echo SALUDO

?>