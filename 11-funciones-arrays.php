<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo.------------------------------

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito) );

//Ordenar los elementos de un arreglo.-------------------------------

$numeros = array(1,3,4,5,1,2);

sort($numeros); //------De menor a mayor

rsort($numeros); //-----De mayor a menor

echo '<pre>';
var_dump($numeros);   
echo '</pre>';

//Ordenar arreglos asociativos-----------------------------------------------

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);
echo '<pre>';
var_dump($cliente);   
echo '</pre>';

asort($cliente); //----- Tiene en cuenta cada valor de las propiedades y los dispone por orden alfabetico

arsort($cliente); //----- Tiene en cuenta cada valor de las propiedades y los dispone por orden alfabetico AL REVES

ksort($cliente); //----- Tiene en cuenta cada propiedad (o llaves) y los dispone por orden alfabetico

krsort($cliente); // ---- Tiene en cuenta cada propiedad (o llaves) y los dispone por orden alfabetico AL REVES

echo '<pre>';
var_dump($cliente);   
echo '</pre>';




include 'includes/footer.php';