<?php
//session_start();
//echo $_SESSION['views'];
header("Content-type: application/json;charset=utf-8");
$username = $_REQUEST['username'];
if ($username == "admin"){
    echo json_encode(array("msg"=>"登录成功","errorCode"=>"ok"));
} else {
    echo json_encode(array("msg"=>"登录成功","errorCode"=>"ok"));
}

//namespace a\b\c;
//
//class Apple {
//    function get_info(){
//        echo "this is a";
//    }
//}

/*PS: namespace 命名空间关键字
在命名空间a\b\c下创建了一个包含输出“this is a”语句的get_info方法的Apple类;*/