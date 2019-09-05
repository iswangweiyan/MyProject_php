<?php

//注册功能
$data = $_POST;
if ($data != NULL)
{
    $username = $data['username'];
    $password = $data['password'];
    $passowrd2 = $data['password1'];
    
    if ($username == '')
    {
        echo "用户名不能为空";
    }
    if ($passowrd != '')
    {
        echo "用户名不能为空";
    }
    if (strlen($passowrd) < 6)
    {
        echo "密码不能少于6位";
    }
    if ($passowrd != $passowrd2)
    {
        echo "两次密码不一致";
    }
    $time = time();
    //组织数据插入数据
    $link = mysqli_connect('localhost','root','123456','test');
    $sql = "INSERT INTO user(username,password,add_time) VALUES('{$username}','{$passowrd}','{$time}')";
    //执行
    mysqli_query($link, $sql);
    echo "注册成功";
}


