<?php include 'includes/header.php';
/** INCREMENTO */
$numero1 = 30;
$numero1 ++;

echo $numero1;
echo '<br>';

$numero2 = 30;

echo $numero2++; // Incrementa pero no se muestra en pantalla con el incremento(se muestra 30 y le suma 1)
echo $numero2; //---Este va a imprimir con el incremento (muestra 31)
echo ++$numero2; //-Muestra en pantalla con el incremento (suma 1 y muestra 32)
echo '<br>';


$numero4 = 30;
$numero4 += 5; // incrementamos en 5

echo $numero4;
echo '<br>';
//** LAS MISMAS REGLAS SE APLICAN PARA EL DECREMENTO: */

$numero3 = 30;
$numero3--;

echo $numero3--; //se muestra 29 y le resta 1
echo --$numero3; // numero final a mostrar es el 27

include 'includes/footer.php';