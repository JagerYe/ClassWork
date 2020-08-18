<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);
    $str = "";
    foreach($myArray as $a){
        echo $a . "<br>";
    }
    echo $str;
?>