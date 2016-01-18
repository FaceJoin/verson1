<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/16
 * Time: 22:59
 */



if ($_FILES["file"]["error"] > 0)
{

    $returnString = "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    $returnString = "Upload: " . $_FILES["file"]["name"] . "<br />";
    $returnString .= "Type: " . $_FILES["file"]["type"] . "<br />";
    $returnString .=  "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    $returnString .=  "Stored in: " . $_FILES["file"]["tmp_name"];
    $returnString .=   "good!!!!!!!!";
}
$returnString .=  "<h2>Sae服务模拟器功能测试(以下服务在本地也可以运行)：</h2>";
$returnString .=  "<div>请结合源码观看效果</div>";
$returnString .=  "<h3><a href='" . __URL__ . "/counter' target='_blank'>Counter</a>   <a href='" . __URL__ . "/kv' target='_blank'>KVDB</a>  <a href='" . __URL__ . "/rank' target='_blank'>Rank</a>  <a href='" . __URL__ . "/mc' target='_blank'>Memcache</a>   <a href='" . __URL__ . "/tq' target='_blank'>TaskQueue</a>   <a href='" . __URL__ . "/storage' target='_blank'>Storage</a>    <a href='" . __URL__ . "/mail' target='_blank'>Mail</a>   <a href='" . __URL__ . "/fetchurl' target='_blank'>fetchURL</a>  <a href='" . __URL__ . "/wrappers' target='_blank'> Wrappers</a> <a href='" . __URL__ . "/saeimage' target='_blank'>SaeImage</a>  <a href='" . __URL__ . "/saemysql' target='_blank'>SaeMysql</a></h3>";
$user =M('user_info','helper_','DB_DSN');
$data = $user->select();
dump($data);

exit(json_encode($returnString)) ;
?>