<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
    ];

echo '<pre>';

var_dump($productos); 

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //, JSON_UNESCAPED_UNICODE hace que podamos utilizar el acento " ´ " con json_encode

$json_array = json_decode($json);

var_dump($json); 
var_dump($json_array);  

echo '</pre>';

/**como asi mismo este arreglo asociativo no puede ser leido por json tenemos que converirlo con json_encode
 * json_encode convierte un arreglo de php en un string para ser interpretado en json
 * 
 * json_decode convierte un string que parece un arreglo en un arreglo para php.
*/




include 'includes/footer.php';