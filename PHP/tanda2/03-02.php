<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="03-01.php">Volver</a><br>
    <p> 
    <?php
    $in = "Hoy es ";
    switch (strtolower($_POST['dia'])){
        case 1: echo $in . "Lunes"; break;
        case 2: echo $in . "Martes"; break;
        case 3: echo $in . "Miercoles"; break;
        case 4: echo $in . "Jueves"; break;
        case 5: echo $in . "Viernes"; break;
        case 6: echo $in . "Sabado"; break;
        case 7: echo $in . "Domingo"; break;
        default: echo "ERROR";
    }
    ?>
    </p>
</body>
</html>