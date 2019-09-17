<?php
if($_POST)
{
    $type = $_POST['type'];
    $id = $_POST['id'];
    $link = mysqli_connect("localhost", 'root', '123456', 'test');
    mysqli_query($link, "set names utf8;");
    $sql = "SELECT * FROM area WHERE ParentId = {$id} ";
    $rs = mysqli_query($link, $sql);
    $arr = [];
    while($row = mysqli_fetch_array($rs))
    {
        array_push($arr, $row);
    }
    exit(json_encode($arr));
}


