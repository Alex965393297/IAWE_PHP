<?php


//- Declara una constante que se llame PI
define ("PI",3.141517);

//- Declara una variable que vamos a llamar: numeroEntero
  $numeroentero = NULL;


//- En la siguiente instrucción (nueva línea en el script) asígnale el valor numérico: 1625
$numeroentero = 1625;

//- Luego, en la siguiente instrucción (nueva línea) se deberá mostrar el valor de dicha variable en la página web con el siguiente texto: «El valor de &numeroEntero es …..»  (en los puntos suspensivos debe aparecer el valor 1625)
echo ('el valor de $numeroentero es' .$numeroentero);

//- Muestra por pantalla el resultado de la suma de el valor que contiene la variable numeroEntero con la constante PI

echo ($numeroentero+PI);

//- Crea una variable que sea una referencia a la variable numeroEntero y en la siguiente instrucción asigna el valor 'un número'.

$variable_ref = &$numeroentero;
$variable_ref = "un numero";
echo ($numeroentero);
echo ($variable_ref);
//- Muestra el texto «El valor de &numeroEntero ahora es …..» 
echo ('el valor de $numeroentero ahora es' .$numeroentero);
?>


