<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    session_start(); #如果此方法不执行,不能使用session
    header("http://localhost/phpsandbox/website4/page2.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Session</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name" placeholder="输入名字">
        <input type="text" name="email" placeholder="输入邮件">
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>