<?php
  include("testDefine.php");  //軟引入，引入失敗會警告，但不中斷
  include_once("testDefine.php");//同上，但有重複就不引入
  // require("testDefine.php"); //硬引入，必定要引入，如失敗會報錯

  echo test;
?>