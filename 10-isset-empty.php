<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Emmanuel');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];
//Empty-------------------Revisa si un arreglo está vacio

var_dump( empty($clientes2)); 

// Isse - revisa si un arreglo está creado o una propiedad esta definida


echo '<br>';
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

var_dump( isset($cliente['nombre'])); //----revisando si una propiedad de un arreglo asociativo existe

include 'includes/footer.php';