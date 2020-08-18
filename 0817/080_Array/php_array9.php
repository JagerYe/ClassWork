<?php
function cmp($b, $c)
{
    if ($c == $b) {
        return 0;
    }
    return ($b < $c) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>