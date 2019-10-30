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
    <p> El salario semanal es de 
    <?php 
        $horas = $_POST['horas']; 

        if ($horas <= 40)
            $salario = round($horas*12, $precision = 2);
        else
        $salario = round(40*12, $precision = 2);

        if ($horas > 40)
            $salario = round((($horas-40)*16)+$salario, $precision = 2);
        
        echo $salario
    
    ?>
     euros.
    </p>
</body>
</html>