<?php
$compañeros =
    ['Jordi', 'Guillem', 'Adria'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Compañeros</h1>
<P>GIMBE</P>
<table>
    <?php
        foreach($compañeros as $total) {
            echo '<li>' . $total. '</li>';
        }
    ?>
</table>
</body>
</html>

