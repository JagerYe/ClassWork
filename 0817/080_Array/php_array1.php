<?php
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[4] = 'O';

var_dump($bloodType);

for ($i = 0; $i <= 3; $i++) {
	if($bloodType[$i] !== null){
		echo $bloodType[$i] . "<br />";
	}
	
}
?>