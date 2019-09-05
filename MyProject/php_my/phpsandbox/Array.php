<?php

    #存储多个数值的变量
    /**
     * 下标数组
     * 关联数组
     */
    #数组的创建
    $car = array('honda','toyota','ford');
    $people = ['张三','李四','王五'];

    #添加到数组 下面两种都是在末尾添加;
    $car[3] = 'BWM';
    $car[] = 'Bence';
    
    #计算数组的个数的方法
    echo count($car);

    #数组打印专用的方法
    print_r($car);

    #万能通用的打印方法
    var_dump($car);

    #关联数组 通过key值取到value;
    $people = array('hello'=>'35', 'world'=>'世界','yes'=>35);
    echo $people['world'];
    #添加内容到数组中,在末尾增加
    $people['bell'] = 40;
    pring_r($people);
    var_dump($people);

    #多维数组 数组中还有数组
    $car = array(
        array("hello","world","ss"),
        array(2,3,4),
        array("is","wang","yan","wei")   
    );
    #取值
    echo $car[0][1];



?>