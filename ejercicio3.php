<?php

print_r($_POST);
foreach ($_POST as $parametro){

echo "<br> El parametro que me ha pasado la web es : $parametro";


}

//acceder a los valores y las claves
foreach ($_POST as $clave=> $valor){

echo "<br> el parametro con nombre $clave tiene el valor $valor";

}
echo "<br>el gasto del 3 restaurante es de". $_POST['Rest3'];



function calcularpropina($numero, $porcentaje){
return $numero*($porcentaje/100) ;

}


function preciototal($preciocomida,$propina){
    return $preciocomida+$propina ;


}

function calculosdeporcentajes($gastocomida){


if ($gastocomida<=50  ){

    $porcentaje =  20;

}elseif($gastocomida>200 ){
     $porcentaje = 10;
}else{
$porcentaje = 15;

}
return $porcentaje;

}

$arraypropinas;
$arraytotal;

foreach ($_POST as $clave=> $preciocomida){

$porcentaje = calculosdeporcentajes($preciocomida);
$arraypropinas[$clave]= calcularpropina($preciocomida,$porcentaje);
$arraytotal[$clave]=preciototal($preciocomida,$arraypropinas[$clave]);
}
print_r($arraypropinas);
print_r($arraytotal);


?>