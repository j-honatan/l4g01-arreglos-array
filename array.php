<?php
 $Array =["3","6","8","9"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    Array de entrada: <?= implode(',', $Array) ?>
    <br>
    <?php sort($Array)?>
    Array de salida: <?= implode(',',$Array) ?>
</body>
</html>