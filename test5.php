<?php
$a=[77,5,5,22,13,55,97,4,796,1,0,9];
$b=[0,1,2,3,4,5,6,7,8,9];
$I=[];


$au=array_unique($a);
print_r($au);
sort($au);
// 交集
for ($i=0; $i <count($au) ; $i++) { 
  for ($j=0; $j <count($b) ; $j++) { 
    if ($au[$i]==$b[$j]) {
      array_push($I,$au[$i]);
    }
  }
}

print_r($I);
//
// 差集
for ($k=0; $k <count($b) ; $k++) { 
  array_push($a,$b[$k]);
}
$alen=count($a);
for ($l=0; $l <$alen ; $l++) { 
  for ($m=0; $m <count($I) ; $m++) { 
    if (array_key_exists("$l",$a)) {
      if ($a[$l]==$I[$m]) {
      unset($a[$l]);
    }
    }
  }
}
print_r($a);
//
//聯集
for ($n=0; $n <count($I) ; $n++) { 
  array_push($a,$I[$i]);
}

print_r($a);
?>