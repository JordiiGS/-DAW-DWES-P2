<?php
$values = ["España", "Andorra","Francia"];

$values = array("ISO-639-1 ALFA-3" => "España","724");
$values = array("ISO-3166 ALFA-3" => "Andorra","020");
    foreach ($values as $pais) {
        echo '<li>' . $pais . '</li>';

}
