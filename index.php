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
 echo SALUDO;

/**
 ** Tipos de datos
 */

/**
 **Enteros (int): se utilizan para almacenar números enteros sin decimales.
 */

/**
 * @param $numeroInt guarda el numero entero 2
 */

 $numeroInt = 2;
 echo $numeroInt;

/**
 **Punto flotante (float): se utilizan para almacenar números con decimales.
 */

/**
 * @param $numeroFloat guarda el numero flotante 3.6
 */

 $numeroFloat = 3.6;
 echo $numeroFloat;

/**
 **Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
 */

/**
 * @param $string guarda el texto de tipo string
 */

 $string = 'text';
 echo $string;

/**
 * * Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan por true o false.
 */

/**
 * @param $verdadero me esta guardando true lo que mi imprime 1 porque es booleano
 */

$verdadero = true;
echo $verdadero;

/**
 * *Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de diferentes tipos.
 */

/**
 * @param $arreglo esta guardando es una lista o array los numero 0,1
 */

 $arreglo = [0,1];

 echo $arreglo[0];

?>