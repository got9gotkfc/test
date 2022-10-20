<?php
$string = "人易科計:上 機 測 驗 - 演 算 法";
echo "1.".str_replace(":","：",$string);

$astring=str_replace(" ","",$string);
$answer2=str_replace("-"," - ",$astring);
echo "2.".$answer2;


$a=strpos($astring,":");
$b=strpos($astring,"-");
echo "3.".mb_substr($astring,$a,$b-$a);
?>