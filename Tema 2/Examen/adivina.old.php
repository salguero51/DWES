<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adivina</title>
</head>
<body>
    <?php 
        
    
    ?>



    <h1>..--//ZOLTAR\\--..</h1>
    <h3>Introduce un número entre el <?php print($min." y el".$max) ?>.</h3>

    <p style="height: 100px;">
        <?php
        switch () {
            case "vacio":
                echo("No ha escrito ningún número");
                break;
            case "npos":
                echo("No ha escrito un número entero positivo");
                break;
            case "grande":
                echo("¡El número es demasiado grande!");
                break;
            case "pequeño":
                echo("¡El número es demasiado pequeño!");
                break;            
            default:
                echo("¡Bienvenido! ¿Serás capaz de adivinar el número?");
                break;
        }
        ?>
    </p>

<form action="adivina.php" method="get">
        <p>
            <input type="hidden" name="mode" value="<?php echo $modo?>"> 
            <input type="hidden" name="sol" value="<?php echo $combinacion?>"> 
            <input type="number" name="n1" min="<?php echo($min) ?>" max="<?php echo($max) ?>" required>
        </p>
        <input type="submit" value="Comprobar número">
    </form>
</body>
</html>