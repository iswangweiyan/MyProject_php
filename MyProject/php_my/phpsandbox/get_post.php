<?php 
if (isset($_GET["name"])) {
    echo $_GET["name"];
}
if (isset($_POST['name'])) {
    echo $_POST["name"];

if (isset($_REQUEST["name"])) {
    print_r($_REQUEST);
}
echo $_SERVER["QUERY_SETING"];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>网络请求</title>
</head>

<body>
    <form action="get_post.php" method="POST">
        <div>
            <label>名字</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>邮箱</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="确认">
    </form>

</body>

</html>
<!-- localhost/phpsandbox/get_post.php -->