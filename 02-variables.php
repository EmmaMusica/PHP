<?php include 'includes/header.php';

/**Una variable en php comienza con signo $ */

$nombre = 'Emmanuel';

/**Una variable en php se puede reasignar: */

$nombre = 'Emmanuel 2';

echo $nombre;

var_dump($nombre);


/** Para tener una variable que no se pueda reasignar tenemos que utilizar la siguiente sintaxis: */

define('constante', 'Este es el valor de la constante');

/**Para trabajarla, utilizarla o imprimirla se la utiliza sin el signo de $: */

echo constante;

/**Tambien podemos definir: */
const constante2 = 'hola 2';
echo constante2;

$nombreCliente = 'Juan';
$nombre_cliente = 'De La Torre';



include 'includes/footer.php';