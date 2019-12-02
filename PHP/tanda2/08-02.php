<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="08-01.php">Volver</a><br>
    <p> 
    <?php 
        $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'])/3;

        $val = "Insuficiente";
        if ($media > 4) {$val = "Suficiente";}
        if ($media > 5) {$val = "Bien";}        
        if ($media > 6) {$val = "Notable";}
        if ($media > 8) {$val = "Sobresaliente";}
        

        echo "La nota media es ". $val ." (".round($media, $precision = 2).")";
    ?>
    </p>
</body>
</html>