<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="07-01.php">Volver</a><br>
    <p> 
    <?php 
        $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'])/3;

        echo "La nota media es ".round($media, $precision = 2);
    ?>
    </p>
</body>
</html>