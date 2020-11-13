<?php
$name="Jesus";
$lastname="Sepulveda";
$cadena="Hola mi nombre es "." ".$name." ".$lastname;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <h1>
        <?= $cadena; ?>
    </h1>
</body>
</html>