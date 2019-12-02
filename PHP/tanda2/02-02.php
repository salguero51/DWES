<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="02-01.php">Volver</a><br>
    <p> 
    <?php
    $hora = $_POST['hora'];
    if ($hora >= 6 && $hora <= 12) 
        echo "Buenos Dias";
    if ($hora >= 13 && $hora <= 20)
        echo "Buenas Tardes";
    if ($hora >= 21 || $hora <= 5)
        echo "Buenas Noches";
    ?>
    </p>
</body>
</html>