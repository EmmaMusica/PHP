<?php
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $n1 = 0, int $n2 = 0) { //cuando en el parametro hacemos $n1 = 0, le damos un valor de argumento, por default, en este caso 0
                                            //luego, al mandar llamar la funcion, los argumentos reasignan los valores 
                                            //int se agrega para declarar que los valores a ingresar como argumentos deben ser enteros
    echo $n1 + $n2;
}

sumar(10, 20);

/**Es importante destacar que podemos reubicar la posicion de los parametros cuando estamos definiendo los argumentos.
 * es decir, por ejemplo, sumar(n2: 20, n1: 10); seria para el ejemplo anterior..
 */

sumar(n2: 20, n1: 10);

include 'includes/footer.php';