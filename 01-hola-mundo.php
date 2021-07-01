<?php include 'includes/header.php'; /**Include se utiliza aquí para incluir un archivo,
a diferencia de como veniamos haciendo con html, de que en cada pagina copiar y pegar html del
header y del footer, aquí solo lo hacemos con include */?>
 

<?php /**Es la apertura del codigo de php */

echo "hola mundo"; /**echo no es una funcion porque no tiene los parentesis.
echo se lo conoce como una construccion del lenguaje . Es obligatoorio colocar ; al final*/

?> 

<br>

<?php   /**Pueden ver que cerramos la etiqueta de php y utilizamos html */

echo('Hola Mundo'); /**en este caso utilizamos echo como una funcion */

echo '<br>'; /**Tambien podemos gener el codigo html con php.
No se recomienda utilizar php para generar html, porque seria trabajo para el servidor toda
la carga de contenido. Lo recomendable es que lo haga el navegador, es decir que lo ideal
es combinar php y html como lo vimos en la primer manera */

echo '3er hola mundo';

/**Otras formas de mostrar en pantalla */

?> 
<br>
<?php

print('hola mundo');

print 'hola mundo'; //print tambien existe como constructor del lenguaje.
?> 
<br>
<?php

print_r('hola mundo');/** print_r se utiliza para conocer el contenido de un arreglo cuando debugeamos */
?> 
<br>
<?php
var_dump('hola mundo'); /**var_dump se utiliza mucho cuando estamos debugeando el codigo
porque sirve para conocer el contenido de una variable */

include 'includes/footer.php'; ?> 