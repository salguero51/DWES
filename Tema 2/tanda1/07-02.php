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
    <table>
        <tr>
            <td>Base Imponible:</td>
            <td><?php echo $_POST['base']?></td>
        </tr>
        <tr>
            <td>Iva (21%):</td>
            <td><?php echo round($_POST['base']*0.21, $precision = 2) ?></td>
        </tr>
        <tr>
            <td>Total Factura:</td>
            <td><?php echo round($_POST['base']*1.21, $precision = 2) ?></td>
        </tr>
    </table>
</body>
</html>