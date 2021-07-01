<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
    ];

foreach ($productos as $producto){ ?>
    <li>
    <p>Producto: <?php echo $producto['nombre']; ?> </p>
    <p>Precio: <?php echo '$ ' . $producto['precio']; ?> </p>
    <p> <?php echo ($producto['disponible']) ?  'Disponible' : 'No Disponible' ;?> </p>  
    </li>
    <?php 
     
}
 /**Acabamos de iterar con foreach sobre un arreglo que posee arreglos asociativos
  * mezclando html y php para un correcto trabajo de servidor-navegador
  */


include 'includes/footer.php';