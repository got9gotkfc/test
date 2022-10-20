<?php
function twoSum($nums, $target)
{
  $answer = [];
  if (count($nums) >= 2 && count($nums) <= 103 && $target >= (-109) && $target <= (109)) {
    for ($i = 0; $i < count($nums); $i++) {
      for ($j = 0; $j < count($nums); $j++) {
        if ($nums[$i] >= (-109) && $nums[$i] <= (109)) {
          if ($i != $j && $nums[$i] + $nums[$j] == $target) {
            array_push($answer, $i);
          }
        } else {
          echo "條件不符";
          exit();
        }
      }
    }
    if (count($answer) == 2) {
    return print_r($answer);
  } else {
    echo "條件不符";
  }
  } else {
    echo "條件不符";
  }
  
  
}
$nums=[1,2,3,4,4];
$target=8;
twoSum($nums,$target);
