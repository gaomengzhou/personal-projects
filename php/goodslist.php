<?php
@require_once("config.php");
$sort = $_GET["sort"];
$key = $_GET["key"];

$str = "select  *  from  goodslist  where type=1  and goodsname like '%$key%' order by goodsprice $sort";
$result = mysql_query($str);
$list = array();
while($item = mysql_fetch_array($result)) {
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsprice"] = $item["goodsprice"];
    $temp["goodstitle"] = $item["goodstitle"];
    $temp["goodsnavimg"]=$item["goodsnavimg"];
    // $temp["bigimg"] = $item["bigimg"];
    // $temp["smallimg"] = $item["smallimg"];
    $list[] = $temp;
}
echo json_encode($list);
?>