<?php
@require_once("config.php");
$str = "SELECT count(*) FROM `shoppingcar`";
$result = mysql_query($str);
$item  = mysql_fetch_array($result);
$CarNum=$item[0];
echo json_encode($CarNum);
?>