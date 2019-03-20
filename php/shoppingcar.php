<?php
@require_once("config.php");


$userid = $_GET["userid"];

$str = "select  m.id,m.userid,m.goodsid,g.goodsname,g.goodsimg,g.goodsprice,m.num  from  shoppingcar m,goodslist g where m.goodsid = g.id and m.userid = $userid";
$result = mysql_query($str);
$list = array();//用来做集合的返回

while($item=mysql_fetch_array($result)){
    $temp= array();

    $temp["id"]=$item["id"];
    $temp["goodsid"]=$item["goodsid"];
    $temp["goodsimg"]=$item["goodsimg"];
    $temp["goodsprice"]=$item["goodsprice"];
    $temp["goodsname"]=$item["goodsname"];
    $temp["num"]=$item["num"];

    $list[] = $temp;
}

echo json_encode($list);
?>