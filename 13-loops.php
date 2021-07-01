<?php include 'includes/header.php';

// While------------------------------------------------------------------------------------------

$i = 0; //Inicializador

while($i < 10) { //Condicion
    echo $i . ', ';

    $i++;//Incremento
}

echo '<br>';
// Do While------------------------------------------------------------------------------------------

$i = 0;//Inicializador

do {
    echo $i . ', ';

    $i++;//Incremento
} while ($i < 10);//Condicion

echo '<br>';


//For Loops------------------------------------------------------------------------------------------

for($i = 0; $i<10; $i++) {  //----El for posee el inicializador, la condicion y el incremento en un solo lugar
    echo $i . ', ';
}

echo '<br>';



//FIZZ BUZZ----------------------------------------------------------------------------------------------
/**Si el numero actual es multiplo de 3 debemos imprimir fizz
 * Si el numero actual es multiplo de 5 debemos imprimir buzz
 * Si el numero actual es multiplo de 5 y de 3 debemos imprimir fizz buzz
 */

// for($i = 1 ; $i <100; $i++){
//     if($i % 3 === 0 && $i % 5 === 0) {  // % (modulo) nos permite saber si el resto de una division es 0
//         echo $i . ' FIZZ BUZZ';
//     } else if($i % 5 === 0) {
//         echo $i . ' BUZZ';
//     } else if($i % 3 === 0){
//         echo $i . ' FIZZ';
//     } else {
//         echo $i;
//     }
//     echo '<br>';                            
// }

//For each------------------------------------------------------------------------------------------

$clientes = array('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente) { //el foreach esta diseñado para arreglos, no hace falta conocer la extension del mismo
    echo $cliente . '<br>';
}

//   echo count($clientes); // nos dice la extension del arreglo de clientes
//   echo sizeof($clientes);// tambien nos da idea de la extension del arreglo


/**IMPORTANTE:  para While, ForLoop, If y foreach las llaves "{}" son opcionales,
 *              podemos reemplazarlas por lo siguiente ----
 *              ":" para la apertura, reemplazando a la llave de apertura "{"
 *              "endwhile", "endfor", "endif" y "endforeach" correspondientemente para cerrar.
 *              En el caso de los If, los else if deben ser escritos todo junto:
 *              "elseif"
 */


//foreach para arreglos asociativos:

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $valor) {
    echo $valor . '<br>';  // en este caso la iteracion del foreach es solamente sobre los valores de las propiedades
}

//iterar con los nombres de las propiedades tambien

foreach($cliente as $key => $valor) {
    echo $key . ' - ' . $valor . '<br>';
}


include 'includes/footer.php';