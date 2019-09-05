

<?php


// 单行注释
# 单行注释

/* 
    多行注释
    */

#变量 variables
/**
 * 前缀 '$'
 * 以字母/下划线_ 数字开头
 * 由驼峰命名法
 * 大小写敏感
 * 
 */
$output = "hello world";

#数据类型
/**
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 * Null 空对象
 * Resource
 * 
 */
$number = 5;
$float = 5.5;
$bool = true;  #如果是true,echo打印为1 如果为false;echo 不打印,但是false值为0


#数值相加  使用 + 号

$num1 = 7;
$num2 = 12;
$sum = $num1 + $num2;

#字符串拼接 使用 . 进行拼接 如果需要空格,使用 " ",
$string1 = "hello";
$string2 = "world";
$greeting = $string1 . ' ' . $string2;

#单引号和双引号
/**
 * 下面的如果用echo打印 
 * $greeting1打印结果为: $string1 $string2
 * $greeting2打印结果为: hello world 
 * 说明单引号 '' 里面的内容是字符串 但是双引号 "" 里面的变量是可以正常解析的
 */
$greeting1 = '$string1 $string2';
$greeting2 = "$string1 $string2";


#转义字符
/**
 * 遇到字符串中出现 ' 号的,如果用单引号,要用 \ '代替,
 * 或者使用双引号
 */
$string3 = 'They\'re Here';
$string4 = "They're Here";

#常量
/**
 * 使用define('常量名大写','常量值','true/false');
 * 常量名默认大写 ,第二个参数是常量值,
 * 第三个参数是是否可以大小写,true表示echo打印可以使用小写,默认不写为false
 * 
 * function define($name,$value,$case_insensitive = false) { }
 */
define('LOG','OPEN sss',false);


echo LOG;

?>