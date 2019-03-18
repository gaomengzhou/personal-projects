<?php
@require_once("config.php");

$str = "SELECT * FROM `goodslist` WHERE type=1";
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
    // $temp["bigimg"] = $item["bigimg"];
    // $temp["smallimg"] = $item["smallimg"];
    $list[] = $temp;
}
echo json_encode($list);
?>