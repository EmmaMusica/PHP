<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = '30';

var_dump($numero1 > $numero2);
echo '<br>';

var_dump($numero1 < $numero2);
echo '<br>';

var_dump($numero1 >= $numero2);
echo '<br>';    

var_dump($numero1 <= $numero2);
echo '<br>'; 

var_dump($numero3 == $numero2);
echo '<br>'; 

var_dump($numero3 == $numero4);
echo '<br>';

var_dump($numero3 === $numero4); //----Igual que en JS, este comparador tambieen revisa por el tipo de dato, por ende sera falso
echo '<br>';

var_dump($numero1 <=> $numero2); //--Si el numero de la izq es menor, nos imprime -1
echo '<br>';

var_dump($numero3 <=> $numero2); //--Si son iguales nos imprime 0
echo '<br>';

var_dump($numero2 <=> $numero1); //--Si el numero de la der es menor nos imprime 1
echo '<br>';

include 'includes/footer.php';