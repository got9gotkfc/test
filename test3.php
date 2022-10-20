<?php
$array=[0,1,2,3,4,5,6,7,8,9];
$odd=[];
$even=[];
// 分割成兩個陣列，存放偶數值跟奇數值
foreach ($array as $key => $value) {
    if ($value%2==1) {
        array_push($odd,$value);
    }else{
        array_push($even,$value);
    }
}
print_r($odd);
print_r($even);
// 計算出 奇數總和 減 偶數總和
$oddsum=array_sum($odd);
$evensum=array_sum($even);

$anser=$oddsum-$evensum;
echo "$anser";
?>