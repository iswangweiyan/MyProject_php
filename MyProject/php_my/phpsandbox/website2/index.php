<?php include "server_info.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>服务器与客户端的信息</title>
    <!-- 使用样式表 -->
    <link rel="stylesheet" href="/Users/iswangweiyan/Desktop/MyProject_php/MyProject/php_my/bootstrap.min-4.css">
</head>

<body>
    <div class="container">
        <h1>服务器配置信息</h1>
        <?php if ($server):?>
        <ul class="list-group">
            <?php foreach($server as $key=>$value):?>
            <li class="list-group-item">
                <strong><?php echo $key;?>:</strong>
                <?php echo $value; ?>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>

    </div>


</body>

</html>