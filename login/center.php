<meta charset="utf-8">
<?php
session_start();
if (isset($_SESSION['userid']))
{
    echo "登录成功！<br>";
    echo "用户名:".$_SESSION['username'];
}else
{
    header("Location:login.html");
}