<?php
$x = 123;
echo gettype($x), "<br>";

$x = 123.0;
echo gettype($x), "<br>";

$x = "123.0";
echo gettype($x), "<br>";

$x = "1";
echo gettype($x), "<br>";

$x = TRUE;
echo gettype($x), "<br>";

$x = 1;
$y = "0x10";
echo $x + $y;
