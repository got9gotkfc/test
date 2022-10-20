<?php
// 正序排序
$array=[77,5,5,22,13,55,97,4,796,1,0,9];
$arraylen=count($array);
for ($i=0; $i <$arraylen ; $i++) { 
  for ($j=0; $j <$arraylen-1 ; $j++) { 
    if ($array[$j]>$array[$j+1]) {
        $a=$array[$j+1];
        $array[$j+1]=$array[$j];
        $array[$j]=$a;
    }
  }  
}

print_r($array);
?>