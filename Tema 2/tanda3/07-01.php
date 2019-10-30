<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    input{
        width: 100px;
    }
    </style>
</head>
<body>
    <a href="/">Inicio</a><br>
    CAJA FUERTE: <br><br>
        <?php
        function comprobar($probar, $combinacion) {
            if ($probar == $combinacion){
                return true;
            } else {
                return false;
            }           
        }


        $probar = $_GET['n1'].$_GET['n2'].$_GET['n3'].$_GET['n4'];
        $combinacion = $_GET["sol"];
        
        switch($_GET['mode']){
            case "int1"; 
                $modo = "int2";
                if (comprobar($probar, $combinacion)){
                    echo "La caja fuerte se ha abierto satisfactoriamente";
                    $modo = "start";
                } else {
                    echo "Tienes 3 intentos para abrir la caja";
                }                
                break;
            case "int2"; 
                $modo = "int3";
                if (comprobar($probar, $combinacion)){
                    echo "La caja fuerte se ha abierto satisfactoriamente";
                    $modo = "start";
                } else {
                    echo "Tienes 2 intentos para abrir la caja";
                }   
                break;
            case "int3"; 
                $modo = "int4";
                if (comprobar($probar, $combinacion)){
                    echo "La caja fuerte se ha abierto satisfactoriamente";
                    $modo = "start";
                } else {
                    echo "Tienes 1 intento para abrir la caja";
                }   
                break;   
            case "int4"; 
                echo "";
                $modo = "start";
                if (comprobar($probar, $combinacion)){
                    echo "La caja fuerte se ha abierto satisfactoriamente";
                } else {
                    echo "Lo siento, esa no es la combinación";
                } 
                break;  
            case "start"; default; 
                echo "Tienes 4 intentos para abrir la caja";
                $modo = "int1";
                $combinacion = strval(mt_rand(0000, 9999));
                break;

        }
        ?>
    <form action="07-01.php" method="get">
        <p>
            <input type="hidden" name="mode" value="<?php echo $modo?>"> 
            <input type="hidden" name="sol" value="<?php echo $combinacion?>"> 
            <input type="number" name="n1" min="0" max="9" required>
            <input type="number" name="n2" min="0" max="9" required>
            <input type="number" name="n3" min="0" max="9" required>
            <input type="number" name="n4" min="0" max="9" required>
        </p>
        <input type="submit" value="Abrir">
    </form>
</body>
</html>