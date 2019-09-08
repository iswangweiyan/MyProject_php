<?php
if (isset($_POST["submit"])) {
    //echo "sss";die;
    $username = $_POST["username"];
    /**
     * 将值存入cookie中
     * time()+3600当前时间加入3600秒,表示cookie存储的时间,过期会销毁掉
     */
    setcookie("username", $username, time() + 3600);
    header("location: page2.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP cookies</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="submit" name="submit" value="提交"">
    </form>

</body>

</html>