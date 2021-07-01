<?php include 'includes/header.php';

/**Los Arreglos Asociativos son el equivalente a los Objetos en JavaScripts 
 * 
 * Cada propiedad debe estar entre comillas
 * No se utilizan : sino que usamos =>
 * Tampoco se utilizan {} sino []
 * 
 */

$cliente = [
    'nombre' => 'Emmanuel',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'valor' => 100
        ]
    ];

echo '<pre>';
var_dump($cliente);   
echo '</pre>';
    
//para acceder a una propiedad lo hacemos a traves de su nombre y no de su indice:------------
echo $cliente['nombre'];
echo '<br>';

//cuando hay un arreglo dentro de otro:----------------
echo $cliente['informacion']['tipo'];
echo '<br>';
echo $cliente['informacion']['valor'];


//Agregar una propiedad:--------------------
/**si la propiedad no existe
 * php la va a agregar, y si
 * ya existe la va a sobreescribir
 */
$cliente['codigo'] = 13154219130015;


echo '<pre>';
var_dump($cliente);   
echo '</pre>';


include 'includes/footer.php';