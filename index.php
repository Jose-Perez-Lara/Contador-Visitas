<?php
    if (isset($_COOKIE['contador'])) {

        $contador = $_COOKIE['contador'] + 1;
        $bodyOutput= '<h1>Esta pagina ha sido visitada '.$contador. ' veces</h1>';
        setcookie('contador', $contador);

    }else {
        
        setcookie('contador', 1);
        $bodyOutput= '<h1>Es la primera vez que esta pagina ha sido visitada</h1>';

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$bodyOutput?>
</body>
</html>