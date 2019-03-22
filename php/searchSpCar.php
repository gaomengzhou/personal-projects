<?php
@require_once("config.php");
$userid = $_GET["userid"];

$str = "SELECT count(*) FROM `shoppingcar` WHERE userid =$userid AND type=1";
$result = mysql_query($str);
$item  = mysql_fetch_array($result);
$CarNum=$item[0];
echo json_encode($CarNum);
?>