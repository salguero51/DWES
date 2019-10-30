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
    Multiplos de 5: <br><br>
        <?php
        $i = 5;
        do {
            echo $i."<br>";
            $i = $i + 5;
        } while ($i <= 100);
        ?>
</body>
</html>