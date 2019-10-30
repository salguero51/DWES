<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="01-01.php">Volver</a><br>
    <p> 
    <?php 
    $in = "El " . strtolower($_POST['dia']) . " a primera hora hay ";
    switch (strtolower($_POST['dia'])){
        case "lunes": echo $in . "DWES"; break;
        case "martes": echo $in . "EIE"; break;
        case "miercoles": echo $in . "DIW"; break;
        case "jueves": echo $in . "DIW"; break;
        case "viernes": echo $in . "DWES"; break;
        default: echo "ERROR";
    }
    ?>
    </p>
</body>
</html>