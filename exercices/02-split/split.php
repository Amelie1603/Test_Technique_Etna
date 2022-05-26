<?php

function liste ($list1,$list2){
       
$list_negative = [];
$list_positive = [];

for ($i = 0; $i < (sizeof($list1)) ; $i++){

        if ($list1[$i] < 0) {
              array_push($list_negative,$list1[$i]);
        }

       else if ($list1[$i] >= 0) {
              array_push($list_positive,$list1[$i]);
       }
}

for ($j = 0; $j < (sizeof($list2)) ; $j++){

       if ($list2[$j] < 0) {
             array_push($list_negative,$list2[$j]);
       }

      else if ($list2[$j] >= 0) {
             array_push($list_positive,$list2[$j]);
      }
}

       echo implode(",",$list_positive);
       echo "\n";
       echo implode(",",$list_negative);
       echo "\n";
}

liste([1,-3],[4,-8,-4]);
?>