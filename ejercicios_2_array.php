<?php

$equipoA = array (89,120,103);

$equipoB = array (116,94,123);


$suma = 0;

//puntuacion media de cada equipo 

$suma = array_sum($equipoA);

$total_numeros = count($equipoA);

$media = $suma/$total_numeros;

echo "<br> la media del equipo uno da $media";


$suma = array_sum($equipoB);

$total_numeros = count($equipoB);

$media_segundo = $suma/$total_numeros;

echo "<br> la media del equipo dos da $media_segundo";

//comparacion de las puntuaciones y ganador 
  if( $media > $media_segundo){
    echo "<br> la media del equipo ganador es $media gana el equipo 1 ";

  }elseif ( $media == $media_segundo ){

    echo "los dos equipos estan empatados con las medias $media y $media_segundo";
  }else{

        echo "<br> la media del equipo ganador es $media_segundo gana el equipo 2 ";

    }




//cambiar las puntuaciones de los equipos 

 //media de Maria        
 $equipoMaria = array (97,134,105) ;
 
 $sumaM = array_sum($equipoMaria);

$total_numeros = count($equipoMaria);

$media_tercero = $sumaM/$total_numeros;

echo "<br> la media del equipo de Maria da $media_tercero";
//comparacion de los 3 equipos
$todos_equipos = array ("Juan"=>$media,"Miguel"=>$media_segundo,"Maria"=>$media_tercero);

arsort($todos_equipos);

foreach($todos_equipos as $key =>$val){





    echo " <br> $key = $val";


}


///3. Juan y su familia se fueron de vacaciones a EE.UU. y comieron en tres restaurantes distintos. Pagaron 124, 48 y 268$. Allí todo el mundo deja propina, así que Juan quiere crear una calculadora de propinas. Ha pensado que le gustaría dar un 20 % de propina si la factura es menor de 50 $, 15 % si la factura está entre 50 $ - 200 $ y un 10 % si la factura es de más de 200 $.
//Al final, a Juan le encantaría tener tres arrays:

//* El primero contiene el valor de todas las facturas. Este no se calcula, hay que crear el array poniendo a mano los valores
//* El segundo contiene las tres propinas (una por cada factura)
//* El tercero contiene las tres cantidades finales que tiene que pagar 





    









?>