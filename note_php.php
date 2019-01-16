file a (a.php)

<?php
namespace a\b\c

public class Apple {
    get_info(){
        echo "this is a";
    }
}

// PS: namespace 命名空间关键字
// 在命名空间a\b\c下创建了一个包含输出“this is a”语句的get_info方法的Apple类;

------------------------------------
file b (b.php)

<?php

namespace d\e\f

class Apple {
    get_info(){
        echo "this is b";
    }
}

// PS: namespace 命名空间关键字
// 在命名空间d\e\f下创建了一个包含输出“this is b”语句的get_info方法的Apple类;

------------------------------------
file c (c.php)

<?php

class Apple {
    get_info(){
        echo "this is c";
    }
}

// PS: namespace 命名空间关键字
// 在顶层命名空间下创建了一个包含输出“this is c”语句的get_info方法的Apple类;

------------------------------------
file index (index.php)

<?php
require_once("a.php");
require_once("b.php");
require_once("c.php");


use a\b\c\Apple;
use d\e\f\Apple as BApple;

$a_app = new a\b\c\Apple();
$a_app2 = new a\b\c\Apple();
$a_app3 = new a\b\c\Apple();
$a_app->get_info();

$b_app = new d\e\f\BApple();
$b_app->get_info();

$c_app = new \Apple();
$c_app->get_info();




