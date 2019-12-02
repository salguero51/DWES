<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="10-01.php">Volver</a><br>
    <p> 
    <?php 
        $dia = $_POST['dia'];

        switch($_POST['mes']) {
            case 1: if($dia <= 20) $signo = "Capricornio"; else ($signo = "Acuario"); $mes="Enero"; break;
            case 2: if($dia <= 18) $signo = "Acuario"; else ($signo = "Piscis"); $mes="Febrero"; break;
            case 3: if($dia <= 20) $signo = "Piscis"; else ($signo = "Aries"); $mes="Marzo"; break;
            case 4: if($dia <= 19) $signo = "Aries"; else ($signo = "Tauro"); $mes="Abril"; break;
            case 5: if($dia <= 20) $signo = "Tauro"; else ($signo = "Géminis"); $mes="Mayo"; break;
            case 6: if($dia <= 20) $signo = "Géminis"; else ($signo = "Cáncer"); $mes="Junio"; break;
            case 7: if($dia <= 22) $signo = "Cáncer"; else ($signo = "Leo"); $mes="Julio"; break;
            case 8: if($dia <= 22) $signo = "Leo"; else ($signo = "Virgo"); $mes="Agosto"; break;
            case 9: if($dia <= 22) $signo = "Virgo"; else ($signo = "Libra"); $mes="Septiembre"; break;
            case 10: if($dia <= 22) $signo = "Libra"; else ($signo = "Escorpio"); $mes="Octubre"; break;
            case 11: if($dia <= 21) $signo = "Escorpio"; else ($signo = "Sagitario"); $mes="Noviembre"; break;
            case 12: if($dia <= 21) $signo = "Sagitario"; else ($signo = "Capricornio"); $mes="Diciembre"; break;
        }

        

        echo "Si has nacido el ". $dia ." de ".$mes." eres ".$signo;
    ?>
    </p>
</body>
</html>