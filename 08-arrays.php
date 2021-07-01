<?php include 'includes/header.php';

$carrito = ['Tables', 'Television', 'Computadora'];



//Acceder a un elemento del array   ----------------------------------------------------------------------
//al igual que en JS podemos acceder a cada elemento por el indice:
echo $carrito[1];

//Añadir un elemento al final
$carrito[3] = 'Nuevo Producto';


//Funcion para añadir elemento a un array---------------------------------

//al final--------------------
array_push($carrito, 'Audifonos');
//al inicio-------------------
array_unshift($carrito, 'Smartwatch');



//-----------OTRA FORMA DE CREAR ARREGLOS------------------------------

$clientes = array('cliente1', 'cliente2', 'cliente3');



// MUY IMPORTANTE: Para ver el contenido de un array***********************************

echo '<pre>';
var_dump($carrito);     //----Utilizar el <pre> hace mas sencillo el visualizar el arreglo.
echo '</pre>';


echo '<pre>';
var_dump($clientes);   
echo '</pre>';

//********************************************************************************* */

include 'includes/footer.php';