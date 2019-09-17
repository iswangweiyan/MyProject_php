<?php
/**
 * PHP_EOL 换行符
 * windows平台相当于    echo "\r\n";
 * unix\linux平台相当于    echo "\n";
 * mac平台相当于    echo "\r";
 */

#创建类
class Person
{
    #属性:名词
    public $name = "iswwy";
    private $email = "iswwy@gmail.com";
    //protected $age = 14;

    #方法:动词
    /**
     * rivate私有属性,只可以在类的内部访问,比如只能在class Person{*这里面可以访问*},只能在这个花括号里面去访问
     * 但是我们可以使用公开的方法,将值返回到外部,
     */
    public function setEmail($email)
    {
        #$this指的是实例化的对象,比如下面实例化的$person1......
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    #构造函数:一个类中定义一个,每次创建对象的时候先调用此方法,适合在使用对象之前做一些初始化工作
    public function __construct($name, $email)
    {
        echo "hello";
        $this->name = $name;
        $this->email = $email;
    }
    #析构函数
    // public function __destruct()
    // {
    //     echo __CLASS__ . "被销毁了";
    // }
     public function __destruct()
    {
       echo __CLASS__ . "销毁处理";
    }

}
#继承
class Customers extends Person
{
    private $salary = '3000';
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function __construct($name,$email,$salary)
    {
        #调用父级的构造函数
        parent::__construct($name,$email);
        $this->salary = $salary;
    }
}

$customer1 = new Customers("wwy","iswang@gmail.com","10000");

    echo $customer1->getEmail();
    echo $customer1->getSalary();


#实例化对象
$person1 = new Person;
#修改
//$person1->name = "小明";
//echo $person1->name;

#获取private属性的指
echo $person1->getEmail();
echo "<br>";

#修改私有属性
$person1->setEmail("xxx@foxmail.com");
echo "修改后的email是" . $person1->getEmail();

/*
public:类外部:可以访问 类内部:可以访问  子类:可以访问
private: 类的内部可以访问;
protected: 内部和子类可以访问
 */
echo "<hr>";
#构造函数使用:
$person2 = new Person("iswangwy", "isxxx@gmail.com");
echo $person2->name;
//echo $person2->getEmail();
