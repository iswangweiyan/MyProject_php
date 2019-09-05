<?php

#字符串操作函数

#返回字符串的一部分
$output =substr("hello world",1,3);
$output1 =substr("hello world",-1,-3);
echo $output;

#返回字符串的长度
$output=strlen("hello world");
echo $output;

# strpos() 返回字符串第一次出现的位置;
$output =strpos("hello world", "o");

#strrpos()返回最后一个出现的位置
$output = strrpos("hello world","o");
echo $output;

# strtolower();将字符串转化为小写
$output = strtolower("HELLO WORLD");

#ucwords(); 将单词的首字母大写;
$output =ucwords("hello world");

#替换所要匹配的内容
#第一个查询的内容,替换的内容,要替换的变量名称
#str_replace
$text = "hello world";
$output = str_replace("world","yes",$text);
echo $output;

#判断是否是字符串 is_string;
$var = 44;
$output = is_string($var);

#练习 判断数组中的元素是不是字符串

$arr =  [true,false,"33",44, 'hello world', " ",31.2 ];

foreach ($arr as $value) {
    if (is_string($value)) {
        echo "$value 是字符串";
    }
}

#压缩-解压  压缩后的字符串是一段乱码
#gzcompress
$str = "sjfaljfasfsajfk ajfj ksdahgasdgja jgklasdjgkasdjgasdkgjkaslk";
$compressed = gzcompress($str);
$original = gzuncompress($compressed);





