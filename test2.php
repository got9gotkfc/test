<?php
$string = "人易科計:上 機 測 驗 - 演 算 法";
echo "1.".str_replace(":","：",$string);
echo "<br>";

$noblankstring=str_replace(" ","",$string);
$answer2=str_replace("-"," - ",$noblankstring);
echo "2.".$answer2;
echo "<br>";

$a=strpos($string,":");
$b=strpos($string,"-");
echo "3.".substr($string,$a+1,$b-$a-1);
?>