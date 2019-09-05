<?php

#function :可复用的代码块

    function simpleFunction(){
        echo "hello world";
    }

    simpleFunction();

    #带参函数
    function sayHello ($name = "iswangweiyan"){
        echo "hello $name<br>";
    }
    sayHello("jao");

    #带返回值的参数
    function addNumbers ($num1,$num2){
        return $num1+$num2;
    }
    echo addNumbers(2,4);

    #函数传引用
    function addFive($num){
        $num +=5;

    }
    function addTen(&$num)
    {
        $num +=10;
    }

    #传递地址参数才能修改$num的值,
?>