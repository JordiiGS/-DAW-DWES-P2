<?php

echo "Jordi Gamarra";

// Esto no se ejecutará...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimbernat</title>
</head>
<body>
<h1>BIENVENIDO A MI PÀGINA!</h1>
<P>GIMBE</P>
<table>
    <?php for($i=1;$i<=10;$i++): ?>
        <tr>
            <td><?php echo "$i Estamos en 2 de DAW"?></td>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>