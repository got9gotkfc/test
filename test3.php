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
echo "奇數陣列:";
print_r($odd);
echo "<br>";
echo "偶數陣列:";
print_r($even);
echo "<br>";

// 計算出 奇數總和 減 偶數總和
// $oddsum=array_sum($odd);
// $evensum=array_sum($even);
$oddsum=0;
$evensum=0;
for ($i=0; $i <count($odd) ; $i++) { 
    $oddsum=$oddsum+$odd[$i];
}
for ($j=0; $j <count($even) ; $j++) { 
    $evensum=$evensum+$even[$j];
}
$anser=$oddsum-$evensum;
echo "奇數總和減去偶數總和:";
echo "$anser";
?>