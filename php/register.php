<?php
@require_once("config.php");
$username = $_GET["username"];
$userpwd = $_GET["userpwd"];
$usertel = $_GET["usertel"];

$str = "SELECT COUNT(*) FROM userinfo WHERE username='$username' OR usertel='$usertel'";
$result = mysql_query($str);
$item = mysql_fetch_array($result);
$obj = array();

if($item[0]>0){
    $obj["code"] = 0;
    $obj["msg"] = "用户名或手机号已存在";
}else{
    $str = "insert into userinfo(username,userpwd,usertel,type) values('$username','$userpwd','$usertel',1)";

    mysql_query($str);
    $count = mysql_affected_rows();
    if($count>0){
        $obj["code"] = 1;
        $obj["msg"] = "注册成功";
    }else{
        $obj["code"] = 0;
        $obj["msg"] = "注册失败";
    }
}
echo json_encode($obj);


?>