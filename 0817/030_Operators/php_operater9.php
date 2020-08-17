<?php

$x = 100;
$y = &$x; //&會將y成為指標

$y = 200;
echo "x = $x </br>";

unset($x); //清除記憶體，y會扶正並變為一般變數
echo "y = $y </br>";

?>