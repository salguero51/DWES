<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DisFruta con PHP</title>
</head>
<body>
    <?php 
    for ($i=0; $i < 13; $i++) { 
        $frutas[$i] = "&#1278".($i+15);
        $nfrutas[$i] = 0;
    }

    $totalfruta = rand(7,20);

    for ($i=0; $i < $totalfruta; $i++) { 
        $frutarandom = rand(0,12);
        $lfrutas[] = $frutas[$frutarandom];
        $nfrutas[$frutarandom]++;
    }
    ?>

    <h1 style="text-align: center">DisFruta con PHP </h1>

    <h2><?php print($totalfruta)?> frutas</h2>

    <p style="font-size: 7rem">

    <?php
        foreach ($lfrutas as $fruta => $valor) {
            print("$valor\n\t");
        }
    ?>

    </p>

    <h2>Resultados</h2>

    <?php 
    
    for ($i=0; $i < count($frutas) ; $i++) { 
        if ($nfrutas[$i] > 0) {
            print('<p>La fruta <span style="font-size: 2rem">'.$frutas[$i].'</span> está <strong>'.$nfrutas[$i].'</strong> '.($nfrutas[$i] > 1 ? "veces" : "vez")." en la lista.</p>\n\t");
        }  
    }

    ?>
    <br>
    <button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>
    <br>
</body>
</html>