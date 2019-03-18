<?php
@require_once("config.php");

$username = $_GET["username"];
$userpwd = $_GET["userpwd"];

$str = "select  *  from  userinfo where username='$username'";

$result = mysql_query($str);
$item = mysql_fetch_array($result);
$obj = array();
$password=$item["userpwd"];
if($item){
    if($password==$userpwd){
        $obj["code"]=1;
        $obj["msg"]="登入成功";
        $obj["id"]= $item["id"];
    }else{
        $obj["code"]=0;
        $obj["msg"]="密码错误";
    }
}else{
    $obj["code"]=0;
    $obj["msg"]="用户名不存在";
}

echo json_encode($obj);
?>