<?php
function countAppearanceTime($number, $value)
{
    $count = 0;
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] == $value) {
            $count++;
        }
    }
    return $count;
}
$arr = [1,1,1,1,1,1,1,1,1];
var_dump(countAppearanceTime($arr,1));
