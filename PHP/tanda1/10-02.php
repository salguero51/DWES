<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="09-01.php">Volver</a><br>
    <p> El volumen del cono es de 
    <?php echo (M_PI * ($_POST['radio']*$_POST['radio'])*$_POST['altura'])/3 ?>
     metros cubicos
    </p>
</body>
</html>