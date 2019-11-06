<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function comprobar($intento, $numero) {
            global $max;
            global $min;
            if ($intento == $numero){
                return 0;
            }            
            if ($probar > $numero){
                return 1;
            }
            if ($probar < $numero) {
                return 2;
            }
            else {
                return 3;
            }           
        }
                
        switch($_GET['mode']){
            case "intento"; 
                switch (comprobar($_GET['numero'],$numero)) {
                   case 0:
                        $parrafo = "!Enhorabuena! \n Has adivinado el número ".$numero;
                        break;
                   case 1:
                        $parrafo = "¡El numero ".$_GET['numero'." es demasiado grande!"];
                        $max = $numero;
                        break;
                   case 2:
                        $parrafo = "¡El numero ".$_GET['numero'." es demasiado pequeño!"];
                        $min = $numero;
                        break;
                }                
                break; 
            case "start"; default; 
                $numero = strval(mt_rand(1, 100));

                $parrafo = "¡Bienvenido! ¿Serás capaz de adivinar el número?".$numero;
                $modo = "intento";
                
                $min = 1;
                $max = 100;
                break;

        }
        ?>
    <h1>..--//ZOLTAR\\--..</h1>
    <h3>Introduce un número entre el <?php echo($min." y el ".$max) ?>.</h3>

    <p style="height: 100px;"><?php print($parrafo)?>

    <form action="adivina.php" method="get">
        <p>
            <input type="hidden" name="mode" value="<?php echo $modo ?>"> 
            <input type="number" name="numero">
        </p>
        <input type="submit" value="Comprobar número">
    </form>
</body>
</html>