<?php
$s = "01234567";

$pos = strpos($s, "012");

// if (gettype($pos) == "integer") {
//     echo ("找到 " . $pos);
// } else {
//     echo ("沒找到");
// }

if ($pos === false) {
    echo ("沒找到");
} else {
    echo ("找到 " . $pos);
}
