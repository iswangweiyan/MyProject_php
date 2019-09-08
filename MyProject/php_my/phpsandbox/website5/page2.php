<?php

#更改cookie
setcookie("username", "iswangweiyan", time() + 360);

#删除cookie
//setcookie("username","iswangweiyan",time()-3600);
//查询和删除,必须页面发送变化

#判断有几个cookie
if (count($_COOKIE)>0) {
    echo "一共有". count($_COOKIE)."个cookie<br>";
}

#查询使用超全局变量 $_COOKIE
if (isset($_COOKIE['username'])) {
    echo 'username属性' . $_COOKIE["username"] . "存在<br>";
} else {
    echo "username不存在";
}
