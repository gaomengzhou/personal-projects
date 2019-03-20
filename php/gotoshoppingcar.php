<?php
@require_once("config.php");


$userid = $_GET["userid"];
$goodsid= $_GET["goodsid"];
$num = $_GET["num"];

//在执行新增的时候 要判断该用户是否买过该商品

$str = "select count(*) from  shoppingcar where  userid=$userid and  goodsid=$goodsid";

$result = mysql_query($str);

$item  = mysql_fetch_array($result);

if($item[0]>0){
$str= "update  shoppingcar set num = num+$num  where  userid=$userid and  goodsid=$goodsid";
}else{
$str = "insert  into shoppingcar(userid,goodsid,num) values($userid,$goodsid,$num)";
}

mysql_query($str);

$count = mysql_affected_rows();
$obj = array();

if($count>0){
    $obj["code"]=1;
    $obj["msg"]= "购买成功";
}else{
    $obj["code"]=0;
    $obj["msg"]= "购买失败";
}

echo  json_encode($obj);
?>