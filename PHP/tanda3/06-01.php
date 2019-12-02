<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/">Inicio</a><br>
    Números del 320 al 160 de 20 en 20: <br><br>
        <?php
            $i = 320;
            do {
                echo $i."<br>";
                $i = $i - 20;
            } while ($i >= 160);

        ?>
</body>
</html>