<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1 Capital</title>
</head>

<body>


    <?php

    $limite = $_GET['limite'];
    $incremento = $_GET['incremento'];

    $resultado = ($limite * $incremento);

    echo 'Limite: ' . $limite . ', Incremento:' . $incremento;
    echo '<br><br><hr>';

    for ($i = 1; $i <= $limite; $i++) {
        echo str_pad('', ($incremento * $i), '*') . '<br />';
    }


    for ($i = $limite - 1; $i >= 1; $i--) {
        echo str_pad('', ($incremento * $i), '*') . '<br />';
    }


    ?>

</body>

</html>