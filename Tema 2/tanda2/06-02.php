<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="06-01.php">Volver</a><br>
    <p> 
    <img src="https://latex.codecogs.com/gif.latex?t=\sqrt{2h/g}">
    <?php 
        echo "h = ".$_POST['h'];
        echo "t = ".sqrt((h*$_POST['h'])/9.81);
    ?>
    </p>
</body>
</html>