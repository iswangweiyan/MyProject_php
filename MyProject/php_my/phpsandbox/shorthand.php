<?php

$loggedIn = true;

#三目运算符联系
#echo ($loggedIn) ? "You r logged in" : "You r not logged in";

$retval = ($loggedIn) ? "you r loggde in" : "you r not loggde in";
echo $retval;

#$retVal = (condition) ? a : b ;

$age = 7;
$score = 12;

echo "你的分数是" . ($score < 10 ? ($age > 10 ? "中等成绩" : "优等成绩") : ($age > 10 ? "差等成绩" : "中等成绩"));
?>

<div>
    <?php if ($loggedIn) {?>
    <h1>hello world</h1>
    <?php } else {?>
    <h1>你好</h1>
    <?php }?>
</div>

<!--更好的写法-->

<div>
    <?php if ($loggedIn): ?>
    <h1>Welcome</h1>
    <?php else: ?>
    <h1>Everyone</h1>
    <?php endif;?>
</div>

<!-- for循环语法糖 -->
<div>
    <?php for ($i = 0; $i < 10; $i++): ?>
    <li><?php echo $i . "<br>" ?></li>
    <?php endfor;?>
</div>

<!-- foreach 语法糖 -->
<?php
$arr = ["iswangweiyan", "zhangsan", "lisi"];
?>
<div>
    <?php foreach ($arr as $value): ?>
    <?php echo $value . "<br>"; ?>
    <?php endforeach;?>
</div>