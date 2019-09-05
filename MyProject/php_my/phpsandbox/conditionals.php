<?php

#conditional 条件的
/**
 * 条件判断语句
 *  if switch
 *  关系运算符
 */

$num = 5;
/**
 *  == 值是否相等
 *  ===值和类型是否相等
 *
 */
if ($num == 5) {
    echo "yes";
} else if ($num >= 3) {
    echo " yes yes";
} else {
    echo "noting";
}

#if嵌套
/**
 * if(){}
 * else if(){}
 * else if(){}
 * else if(){}
 * else{}
 */
$num3 = 1;
if ($num3 == 1) {
    if ($num3 >= 4) {
        echo 'no';
    } else if ($num3 <= 2) {
        echo 'num3小于等于2';
    } else {
        echo 'yes';
    }
}

#逻辑运算符
/**
 * AND &&
 * OR ||
 * XOR 亦或 两真或者两假都不满足条件,只有一个真一个假,才满足
 * 
 * 
 */

$number = 3;

if ($number > 3 and $number < 10) {
    echo '数字大于3但是小于10';
} else {
    echo '数字不大于3也不小于10';
}

$number1 = 4;
if ($number1 > 3 or $number1 < 10) {
    echo 数字大于3或者小于10;
} else {
    echo 两个条件都不成立;
}

$number2 = 5;
if ($number2 == 5 xor $num > 10) {
    echo 'xor条件成立';
}
#switch 开关
/**
 * 
 */
$favColor = "black";
switch ($favColor) {
    case 'red':
        echo "your favorite color is red";
        break;

    case 'white':
        echo "your favorite color is white";
        break;

    case 'blue':
        echo "your favorite color is blue";
        break;
    default:
        echo 'noting';
        break;
}
