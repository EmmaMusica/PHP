<?php include 'includes/header.php';

/**Existen 3 formas de agregar archivos o codigos a nuestro trabajo:
 * *include -----> Se recomiendo utilizarlo cuando lo que haya que agregar sea algo no tan grande o puramente esencial
 *                 Ademas, dependiendo de la configuracion, si no encuentra el archivo, la app sigue ejecutandose.
 * *require -----> Se recomienda utilizarlo cuando no se tenga que ejecutar la aplicacion en caso de que falta un archivo muy importante.
 *                 Si no encuentra el archivo, deja de ejecutarse.
 * *require_once > Funciona igual que "require". pero se utiliza para verificar si algo ya está sumado a la pagina, 
 *                 en caso de ya estar agregado require_once no hace nada.     
 */

require 'funciones.php';

iniciarApp();




include 'includes/footer.php';