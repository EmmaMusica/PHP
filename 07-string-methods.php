<?php include 'includes/header.php';

$nombreCliente = '     Emmanuel Araujo       ';

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo '<br>';

//Eliminar espacios en blanco:
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir a Mayusculas:

echo strtoupper($nombreCliente);

//COnvertirlo en minusculas:

echo strtolower($nombreCliente);
echo '<br>';
//Utilidad:

$email1 = 'correo@correo.com';
$email2 = 'Correo@correo.com';

var_dump(strtolower($email1) === strtolower($email2));

/**De esta manera en la consulta con la base de datos no nos va a saltar un 'no existente' ya que siempre encontraremos
 * el valor que estamos buscando en minusculas.
 */

//Reemplazando palabras por letras:

$nombreCliente2 = 'Emmanuel Araujo';

echo str_replace('Emmanuel', 'E.', $nombreCliente2);

//Revisar si un string existe o no

echo strpos($nombreCliente2, 'Emmanuel'); // Indica la posicion en la que se encuntra. Si no está no muestra nada

// concatenar strings y variables:

echo '<br>';
$tipoCliente = 'Premium';

echo "El Cliente " . $nombreCliente2 . ' tiene categoria ' . $tipoCliente; // siempre separar con puntos

echo '<br>';

echo "El cliente ${nombreCliente2} es {$tipoCliente}"; /**es importante notar que el signo $ podria estar
 dentro o fuera de las llaves. Y esta forma solo funciona con doble comillas, no con comillas simples. */







include 'includes/footer.php';