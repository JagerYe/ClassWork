<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器 mysqli_connect(連線網址，帳號，密碼，DataBase，port)
$link = @mysqli_connect("localhost", "root", "root") or die(mysqli_connect_error());
var_dump($link);


// try{
//     $link = @mysqli_connect("localhost", "root", "root");
// }catch(Exception $e){
//     mysqli_close($link);
// }

//mysqli_query(連線物件，指令)
$result = mysqli_query($link, "set names utf8"); //設定文字格式
mysqli_select_db($link, "class"); //設定連線的DataBase

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);
var_dump($result);
echo $result->num_rows;

// 3. 處理查詢結果 mysqli_fetch_assoc(結果)==>提取一筆資料
while ($row = mysqli_fetch_assoc($result)) {
    //字串內如要標陣列內的位子時須用{}包覆
    echo "ID：$row[cID]<br>";//比較潮
    echo "Name：{$row['cName']}<br>";//全版本都可
    echo "<HR>";
}

// 4. 結束連線
mysqli_close($link);

echo "<br />-- Done --";
