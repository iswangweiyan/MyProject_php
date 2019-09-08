<?php

function updateData($sql)
{
    #连接数据库
    $localhost = "localhost";
    $username = "root";
    $password = "root";
    $table = "people";
    $mysqli = new mysqli($localhost, $username, $password, $table);

    #判断数据库连接是否成功
    if ($mysqli->connect_errno) {
        #只要不为0,就表示连接失败
        die($mysqli->connect_error);
    } else {
        echo "连接成功";
    }

#插入数据
    $mysqli->query("set names utf8");

    $result = $mysqli->query($sql);

    if ($result) {
        echo "插入成功";

    } else {
        echo "插入失败";
    }
    #关闭数据库
    $mysqli->close();
}

$sql = "INSERT INTO `customers` (`id`, `firstName`, `lastName`, `email`, `address`, `city`, `state`) VALUES (NULL, '打包', '小d米', '4343@qq.com', '北京', '天津', '状态关闭')";

updateData($sql);
