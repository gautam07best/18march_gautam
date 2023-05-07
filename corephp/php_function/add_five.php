<?php
function add_five(&$value)
{
    $value +=6;
}
$num=2;
add_five($num);
echo $num;
?>