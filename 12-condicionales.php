<?php include 'includes/header.php';

$autenticado = true;

$admin = false;

// if - else -------------------------------------------------------
if ($autenticado || $admin) {
    echo "Usuario Autenticado Correctamente";
} else {
    echo "Usuario no autenticado, por favor inicie sesión";
}


// if anidados --------------------------------------------------
echo '<br>';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)){
    echo "El cliente si existe";
    echo "<br>";
    if ($cliente['saldo'] > 200){
        echo "Saldo disponible para compra";
    } else{
        echo "Saldo no disponible para compra";
    }
} else {
    echo "El cliente no existe";
}


// else if -----------------------------------------------------------------------
echo '<br>';
if ($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo';
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es premium';
} else {
    echo "El cliente no tiene saldo";
}

//Switch ----------------------------------------------------------------------------

echo '<br>';

$tecnologia = 'JavaScript';

switch ($tecnologia) {
    case 'PHP':
        echo "php, es un excelente lenguaje";
        break;
    case 'JavaScript':
        echo 'El lenguaje de la web';
        break;
    case 'html':
        echo 'Emmm...';
        break;
    default:
        echo "Algún otro lenguaje";
        break;

}

include 'includes/footer.php';