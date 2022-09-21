<?php
$array = array(1,2,3,4,5,6,7,8,9,11,12,13,14,15);

function maxim($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i <$n; $i++)
        if($max < $array[$i])
            $max = $array[$i];
    return $max;
}
function minim($array)
{
    $n = count($array);
    $min =  $array[0];
    for($i= 1; $i <minim.length; $i++) {
        if ($min > $array[$i])
            $min = $array[$i];
    }
    return $min;
}
echo(minim($array));
echo(maxim($array));
?>
