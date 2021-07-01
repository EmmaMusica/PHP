<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?string { // " : string" nos acota el tipo de dato que debemos retornar.
    if($autenticado) {
        return "El usuario está autenticado";
    } else {
        return null;
    }
}

/**Si una funcion tiene que retornar algun tipo especifico de dato, debemos utilizar la sintaxis luego de la declaracion 
 * de la funcion como " : string" por ejemplo si es que queremos retornar un string. Si lo que queremos es imprimir algo
 * en la pantalla lo que debemos colocar es un  " : void" , para que nos permita la funcion utilizar un "echo".
 * Si utilizamos un signo "?" al principio del tipo de dato, por ejemplo, " : ?string" logramos que salve un error, si es
 * que estamos retornando un valor que no es, por ejemplo, un null.
 */


$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';