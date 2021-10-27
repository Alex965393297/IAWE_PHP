<?php
//4. Crea una función que reciba tres parámetros (nombre de producto, precio e impuesto en porcentaje sobre 100). 
//La función hará lo siguiente:

//* Los parámetros deberán tener un valor por defecto por si no los recibe que deben ser: "Producto genérico", 100 y 21.
//* Si los números no son válidos (NaN) muestra un error. Si son válidos, muestra por consola el nombre del producto y 
//el precio final contando impuestos.



//mostramos los parametros que hemos pasado


	$precio = $_POST['precio'];
	$impuesto = $_POST['impuesto'];
	$producto = $_POST['producto'];



	function comprobarFormulario ($producto="Producto genérico", $precio=100, $impuesto="21"){
	    if(is_numeric($precio) && is_numeric($impuesto)){
	        $iva = ($precio/100)*$impuesto;
	        $precioFinal = $precio + $iva;
	        return $precioFinal;
	    }else{
	        $error = "NaN";
	        return $error;
	    }
	}
	
	echo "El precio final de $producto es de ".comprobarFormulario($producto, $precio, $impuesto);
	echo " euros."
	
	
?>