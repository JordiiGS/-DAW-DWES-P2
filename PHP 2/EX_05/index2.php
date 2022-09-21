<?php
$var = 5;
echo "<div style='font-family:Courier New, Courier, monospace;'>";
for ($row = $var; $row >= 1; $row--) {

    for($i=$row;$i<$var;$i++)
    {
        echo "&nbsp";
    }

    for($j=0;$j<$row;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "</div>";
?>