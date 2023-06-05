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

/**
 * *operadores aritmeticos (+,-,*,/,%;**): se utilizan para hacer cualquier operacion matematica.
 */

 /**
 * *operadores aritmeticos (+): se utilizan para sumar numeros en este caso suma 2 + 2 que da 4.
 */

 $resultadoSuma = 2 + 2;

 echo $resultadoSuma;

 /**
 * *operadores aritmeticos (-): se utilizan para restar numeros en este caso resta 5 - 2 que da 3.
 */

 $resultadoResta = 5 - 2;

 echo $resultadoResta;

 /**
 * *operadores aritmeticos (*): se utilizan para multipicar numeros en este caso multiplica 4 * 2 que da 8.
 */

 $resultadoMultiplicacion = 4 * 2;

 echo $resultadoMultiplicacion;

 /**
 * *operadores aritmeticos (/): se utilizan para Dividir numeros en este caso divide 6 / 2 que da 3.
 */

 $resultadoDivicion = 6 / 2;

 echo $resultadoDivicion;

 /**
 * *operadores aritmeticos (%): se utilizan para sacar el sobrante de la divicion de dos numeros en este caso modula 10 % 3 que da 1.
 */

 $resultadoModulo = 10 % 3;

 echo $resultadoModulo;

 /**
 * *operadores aritmeticos (**): se utilizan para potenciar numeros en este caso potencia 3 ** 2 que da 9.
 */

 $resultadoPotenciacion = 3 ** 2;

 echo $resultadoPotenciacion;

 /**
 * *operador de asignacion (=): se utilizan para asignar un valor a una variable en este caso $a = 1.
 */

 $a = 1;

 echo $a;


 /**
 * *operadores para array (+=,==,===,!= =,<> =,!== =).
 */

 /**
 * *operadores para array (+=): se utilizan para unir array.
 */

 $array1 = array("a" => 1, "b" => 2);
 $array2 = array("c" => 3, "d" => 4);

 $array1 += $array2;

 var_dump($array1);

 /**
 * *operadores para array (==): Este operador compara si dos arrays son iguales, es decir, si tienen las mismas claves y los mismos valores en cada una de ellas si cumple da true si no false.
 */

 $array3 = array("a" => 1, "b" => 2);
 $array4 = array("b" => 2, "a" => 1);
 $resultado1 = ($array3 == $array4);

 var_dump($resultado1)

 /**
 * *operadores para array (===): Este operador compara si dos arrays son idénticos, es decir, si tienen las mismas claves y los mismos valores en cada una de ellas, y en el mismo orden si cumple da true si no false.
 */

 $array5 = array("a" => 1, "b" => 2);
 $array6 = array("b" => 2, "a" => 1);
 $resultado2 = ($array5 === $array6);

 var_dump($resultado2);

 /**
 * *operadores para array (!=): se utiliza para comprobar si dos valores no son iguales si cumple da true si no false.
 */

 $array7 = array("a" => 1, "b" => 2);
 $array8 = array("b" => 2, "a" => 1);
 $resultado3 = ($array7 != $array8);

 var_dump($resultado3)

 /**
 * *operadores para array (<>): se utiliza como un sinónimo del operador != para comprobar si dos valores no son iguales si cumple da true si no false.
 */

 $array9 = array("a" => 1, "b" => 2);
 $array10 = array("b" => 2, "a" => 1);
 $resultado4 = ($array9 <> $array10);

 var_dump($resultado4)

 /**
 * *operadores para array (!==): se utiliza para realizar una comparación de desigualdad estricta entre dos valores si cumple da true si no false.
 */

 $array11 = array("a" => 1, "b" => 2);
 $array12 = array("a" => 1, "b" => "2");
 $resultado5 = ($array11 !== $array12);

 var_dump($resultado5)

 /**
 * *operadores de Comparacion (==,===,!=,!==,<>,<,><=,>=,<=>): e utiliza para realizar una comparaciónes si cumple da true si no false.
 */

 /**
 * *operadores de Comparacion (==): Compara si dos valores son iguales, sin tener en cuenta el tipo de dato. si cumple da true si no false.
 */

 $a1 = 5;
 $b1 = "5";

 if ($a1 == $b1) {
    echo "Los valores son iguales";
 } else {
    echo "Los valores son diferentes";
 }

 /**
 * *operadores de Comparacion (===): Compara si dos valores son iguales, teniendo en cuenta tanto el valor como el tipo de dato. si cumple da true si no false.
 */

 $a2 = 5;
 $b2 = "5";

 if ($a2 === $b2) {
    echo "Los valores son iguales en valor y tipo de dato";
 } else {
    echo "Los valores son diferentes en valor o tipo de dato";
 }

 /**
 * *operadores de Comparacion (!=): Compara si dos valores son diferentes, sin tener en cuenta el tipo de dato. si cumple da true si no false.
 */

 $a3 = 5;
 $b3 = "5";

 if ($a3 != $b3) {
    echo "Los valores son diferentes";
 } else {
    echo "Los valores son iguales";
 }

 /**
 * *operadores de Comparacion (!==): Compara si dos valores son diferentes, teniendo en cuenta tanto el valor como el tipo de dato. si cumple da true si no false.
 */

 $a4 = 5;
 $b4 = "5";

 if ($a4 !== $b4) {
    echo "Los valores son diferentes en valor o tipo de dato";
 } else {
    echo "Los valores son iguales en valor y tipo de dato";
 }


 /**
 * *operadores de Comparacion (<>): Compara si dos valores son diferentes, sin tener en cuenta el tipo de dato. si cumple da true si no false.
 */

 $a5 = 5;
 $b5 = "5";

 if ($a5 <> $b5) {
    echo "Los valores son diferentes";
 } else {
    echo "Los valores son iguales";
 }

 /**
 * *operadores de Comparacion (>): Compara si un valor es mayor que otro. si cumple da true si no false.
 */

 $a6 = 10;
 $b6 = 5;

 if ($a6 > $b6) {
    echo "El valor de '$a6' es mayor que '$b6'";
 } else {
    echo "El valor de '$a6' no es mayor que '$a6'";
 }

 /**
 * *operadores de Comparacion (<): Compara si un valor es menor que otro. si cumple da true si no false.
 */

 $a7 = 10;
 $b7 = 5;

 if ($a7 < $b7) {
    echo "El valor de '$a7' es mayor que '$b7'";
 } else {
    echo "El valor de '$a7' no es mayor que '$a7'";
 }

 /**
 * *operadores de Comparacion (>=): Compara si un valor es mayor o igual que otro. si cumple da true si no false.
 */

 $a8 = 10;
 $b8 = 5;

 if ($a8 >= $b8) {
    echo "El valor de '$a8' es mayor o igual que '$b8'";
 } else {
    echo "El valor de '$a8' no es mayor o igual que '$b8'";
 }

 /**
 * *operadores de Comparacion (<=): Compara si un valor es menor o igual que otro. si cumple da true si no false.
 */

 $a9 = 10;
 $b9 = 5;

 if ($a9 <= $b9) {
    echo "El valor de '$a9' es mayor o igual que '$b9'";
 } else {
    echo "El valor de '$a9' no es mayor o igual que '$b9'";
 }

 /**
 * *operadores de Comparacion (<=>):
 * Si el primer valor es menor que el segundo valor, devuelve -1.
 * Si el primer valor es igual al segundo valor, devuelve 0.
 * Si el primer valor es mayor que el segundo valor, devuelve 1..
 */

 $a = 5;
 $b = 10;

 $result = $a <=> $b;

 if ($result === -1) {
    echo "El valor de '$a' es menor que '$b'";
 } elseif ($result === 0) {
    echo "El valor de '$a' es igual a '$b'";
 } elseif ($result === 1) {
    echo "El valor de '$a' es mayor que '$b'";
 }

?>

