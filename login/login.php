<?php
session_start();
?>
<meta charset="utf-8">
<?php
$data = $_POST;
if ($data != NULL)
{
    $username = $data['username'];
    $passowrd = $data['password'];
    //判断
    if ($username == '')
    {
        echo "用户名不为空";
        exit;
    }
    if ($passowrd == '')
    {
        echo "密码不能为空";exit;
    }
    $password = md5($passowrd);
    //查询数据库
    $link = mysqli_connect("localhost", 'root', '123456', 'test');
    $sql = "SELECT * FROM user WHERE username='{$username}' and password ='{$password}'";
    $rs = mysqli_query($link, $sql);
    $arr = mysqli_fetch_array($rs);
    if ($arr == NULL)
    {
        echo "用户名或密码有误<br/>";
        echo "<a href='login.html'>返回</a>";
        exit;
    }
    //sexion
    $_SESSION['userid']=$arr['id'];
    $_SESSION['username'] = $arr['username'];
    echo "登录成功";
    echo "<a href='center.php'>会员中心</a>";
    
}else
{
    echo "====";
    header("Location:register.html");
}