<?php
$pais = array("España"=>"724", "Andorra"=>"020", "Francia"=>"430","Alemania"=>"760", "Belgica"=>"920", "Suiza"=>"660");

foreach($pais as $x => $x_value) {
    echo "País=" . $x . ", Codigo Nº=" . $x_value;
    echo "<br>";
}
?>