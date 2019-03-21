<?php
@require_once("config.php");
$str = "SELECT count(*) FROM `goodslist`";
$result = mysql_query($str);
$item  = mysql_fetch_array($result);
$page=$item[0];
echo json_encode($page);
?>