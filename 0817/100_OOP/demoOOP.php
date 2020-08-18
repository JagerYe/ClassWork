<?php
class Animal
{
    public function __construct($weight = 0)
    {
        $this->weight = $weight;
        echo "objs 已創造" . "<br>";
    }
    // 建構子上下兩種方式都可以
    // public function Animal($weight = 0){
    //     $this->weight = $weight;
    //     echo "obj1 已創造" . "<br>";
    // }

    //物件殺掉時觸發，程式結束時會將所有物件殺掉
    public function __destruct()
    {
        echo "obj已刪除" . "<br>";
    }

    public $weight = 1; //元素必定要宣告public or private
    function makeNoise() //function沒宣告成public or private 時，會宣告成public
    {
        echo "Animal:..." . "<br>";
    }
}

$obj = new Animal(11);
echo $obj->weight . "<br>";
$obj->weight = 10;
echo $obj->weight . "<br>"; //元素有分大小寫
echo $obj->MAKENoise() . "<br>"; //funtion沒分大小寫
$obj->location = "台中"; //可直接創造元素並使用
echo $obj->location . "<br>";
// echo $obj.$weight; //不能這樣叫物件的參數
// echo $obj.makeNoise(); //這一開始就報錯
// $obj = null;