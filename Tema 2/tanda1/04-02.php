<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="04-01.php">Volver</a><br>
    <?php
    echo $_POST['x'], " + ", $_POST['y'], " = ", $_POST['x'] + $_POST['y'], "<br>";
    echo $_POST['x'], " - ", $_POST['y'], " = ", $_POST['x'] - $_POST['y'], "<br>";
    echo $_POST['x'], " x ", $_POST['y'], " = ", $_POST['x'] * $_POST['y'], "<br>";
    echo $_POST['x'], " / ", $_POST['y'], " = ", $_POST['x'] / $_POST['y'], "<br>";
    ?>
</body>
</html>