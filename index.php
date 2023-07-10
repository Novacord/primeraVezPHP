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

 var_dump($resultado1);

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

 var_dump($resultado3);

 /**
 * *operadores para array (<>): se utiliza como un sinónimo del operador != para comprobar si dos valores no son iguales si cumple da true si no false.
 */

 $array9 = array("a" => 1, "b" => 2);
 $array10 = array("b" => 2, "a" => 1);
 $resultado4 = ($array9 <> $array10);

 var_dump($resultado4);

 /**
 * *operadores para array (!==): se utiliza para realizar una comparación de desigualdad estricta entre dos valores si cumple da true si no false.
 */

 $array11 = array("a" => 1, "b" => 2);
 $array12 = array("a" => 1, "b" => "2");
 $resultado5 = ($array11 !== $array12);

 var_dump($resultado5);

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

 /**
     ** strlen: retorna la longitud de una cadena de texto
     */

    echo strlen($nombreCliente);

    /**
     ** trim: elimina espacios en blanco al inicio y al final de una cadena de texto
     */

    $texto = trim($nombreCliente);
    echo strlen($texto);

    /**
     ** strtoupper: convierte una cadena de texto a mayusculas
     */

    echo strtoupper($nombreCliente);

    /**
     ** strtolower: convierte una cadena de texto a minusculas
     */

    echo strtolower($nombreCliente);

    $mail1 = "correo@correo.com";
    $mail2 = "correo@correo.com";

    var_dump(strtolower($mail1) === strtolower($mail2));
    echo str_replace('Juan', 'J', $nombreCliente);

    /**
     ** strpos: retorna la posición de la primera ocurrencia de una cadena de texto
     */

    echo strpos($nombreCliente, 'Pedro');

    $tipoCliente = "Premium - Empresarial";

    echo "<br>";

    echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

    echo "El cliente $nombreCliente es $tipoCliente";


    /**
     *!TODO Arreglos, Arreglos asociativos y funciones para arreglos
     */

    /**
     ** Arreglos: se utilizan para almacenar varios valores en una colección de datos
     */

    $miArreglo = array('valor1', 'valor2', 'valor3');

    $carrito = ['Tablet', 'Television', 'Computadora'];

    /**
     ** Util para imprimir el contenido de un arreglo
     */

    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";

    /**
     ** Acceder a un elemento de un arreglo
     */

    echo $carrito[1];

    /**
     ** Agregar un elemento a un arreglo en una posición especifica
     */

    $carrito[3] = 'Nuevo producto...';

    /**
     ** Agregar un elemento a un arreglo en la ultima posición
     */

    array_push($carrito, 'Audifonos');

    /**
     ** Agregar un elemento a un arreglo en la primera posición
     */

    array_unshift($carrito, 'Smartwatch');

    $clientes = array('cliente1', 'cliente2', 'cliente3');
    echo "<pre>";
    var_dump($clientes);
    echo "</pre>";

    echo $clientes[1];

    /**
     ** Arreglos asociativos: se utilizan para almacenar varios valores en una colección de datos, pero en este caso se accede a los valores a través de una clave
     */

     $miArrayAsociativo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

     /**
      ** Para acceder a un elemento de un arreglo asociativo se utiliza la clave
      */

    echo $miArrayAsociativo['clave1'];
    echo $miArrayAsociativo['clave2'];
    echo $miArrayAsociativo['clave3'];

    /**
     ** foreach: se utiliza para recorrer un arreglo
     */

    foreach ($miArrayAsociativo as $clave => $valor) {
        echo "Clave: " . $clave . ", Valor: " . $valor;
    }

    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200,
        'informacion' => [
            'tipo' => 'Premium',
            'disponible' => 100
        ]
    ];

    echo "<pre>";
    var_dump($cliente['informacion']);
    echo "</pre>";

    echo $cliente['nombre'];
    echo $cliente['informacion']['disponible'];

    /**
     ** Para agregar un elemento a un arreglo asociativo se crea la clave y se asigna el valor
     */

    $cliente['codigo'] = 1209192012;

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    $carrito = ['Tablet', 'Television', 'Computadora'];

    /**
     ** in_array: se utiliza para verificar si un elemento existe en un arreglo
     */

    var_dump(in_array('Tablet', $carrito));
    var_dump(in_array('Audifonos', $carrito));

    /**
     ** sort: se utiliza para ordenar un arreglo de forma ascendente
     ** rsort: se utiliza para ordenar un arreglo de forma descendente 
     */

    $numeros = array(1,3, 4, 5, 1, 2);
    sort($numeros);
    rsort($numeros);

    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    $cliente = array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    );

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    /**
     ** asort: se utiliza para ordenar un arreglo asociativo de forma ascendente por valor, orden alfabetico
     ** arsort: se utiliza para ordenar un arreglo asociativo de forma descendente por valor, z de primero
     ** ksort: se utiliza para ordenar un arreglo asociativo de forma ascendente por clave, orden alfabetico
     ** krsort: se utiliza para ordenar un arreglo asociativo de forma descendente por clave, z de primero
     */

    asort($cliente);
    arsort($cliente);
    ksort($cliente);
    krsort($cliente);

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    /**
     ** Arreglos multidimensionales: se utilizan para almacenar varios valores en una colección de datos, pero en este caso se accede a los valores a través de una clave
     */

    $clientes = array(
        'Juan' => array('saldo' => 200, 'tipo' => 'Premium'),
        'Karen' => array('saldo' => 1000, 'tipo' => 'Premium'),
        'Antonio' => array('saldo' => 500, 'tipo' => 'Normal')
    );

    /**
     ** Para acceder a un elemento de un arreglo multidimensional se utiliza la clave  
     */

    echo $clientes['Juan']['saldo'];

    /**
     *!TODO Metodos para arreglos
     */

    /**
     ** Array_flip: se utiliza para intercambiar las claves de un arreglo por sus valores
    */
    
    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_flip($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_fill: se utiliza para llenar un arreglo con valores en un rango especifico
     */

    $miArreglo = array_fill(0, 10, 'valor');

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_filter: se utiliza para filtrar los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_filter($miArreglo, function($elemento) {
        return $elemento > 5;
    });

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_map: se utiliza para modificar los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_map(function($elemento) {
        return $elemento * 2;
    }, $miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_reduce: se utiliza para reducir los elementos de un arreglo a un solo valor
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_reduce($miArreglo, function($elemento, $valor) {
        return $elemento + $valor;
    });

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_key_exists: se utiliza para verificar si una clave existe en un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    if(array_key_exists('clave1', $miArreglo)) {
        echo 'La clave existe';
    } else {
        echo 'La clave no existe';
    }

    /**
     ** in_array: se utiliza para verificar si un valor existe en un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    if(in_array('valor1', $miArreglo)) {
        echo 'El valor existe';
    } else {
        echo 'El valor no existe';
    }

    /**
     ** array_rand: se utiliza para obtener una o varias claves aleatorias de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_rand($miArreglo, 2);

    /**
     ** array_unique: se utiliza para eliminar los valores duplicados de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10,1,2,3,4);

    $miArreglo = array_unique($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_intersect: se utiliza para obtener los valores que existen en dos o más arreglos
     */

    $miArreglo1 = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo2 = array(5,6,7,8,9,10,11,12,13,14);

    $miArreglo = array_intersect($miArreglo1, $miArreglo2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_diff: se utiliza para obtener los valores que no existen en dos o más arreglos
     */

    $miArreglo1 = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo2 = array(5,6,7,8,9,10,11,12,13,14);

    $miArreglo = array_diff($miArreglo1, $miArreglo2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_push: se utiliza para agregar uno o más elementos al final de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    array_push($miArreglo, 11, 12, 13, 14, 15);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_pop: se utiliza para eliminar el último elemento de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    array_pop($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_reverse: se utiliza para invertir el orden de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_reverse($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_sum: se utiliza para obtener la suma de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_sum($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_product: se utiliza para obtener el producto de los elementos de un arreglo
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_product($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_chunk: se utiliza para dividir un arreglo en arreglos más pequeños
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    $miArreglo = array_chunk($miArreglo, 2);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_keys: se utiliza para obtener las claves de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_keys($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_values: se utiliza para obtener los valores de un arreglo
     */

    $miArreglo = array('clave1' => 'valor1', 'clave2' => 'valor2', 'clave3' => 'valor3');

    $miArreglo = array_values($miArreglo);

    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**
     ** array_walk: se utiliza para recorrer un arreglo y aplicar una función a cada uno de sus elementos
     */

    $miArreglo = array(1,2,3,4,5,6,7,8,9,10);

    function cuadrado($valor) {
        echo $valor * $valor . "<br>";
    }

    array_walk($miArreglo, 'cuadrado');


?>

