<?php

// sum of array foreach loop 


$arr = array(10, 20, 30, 40, 50);
$sum = 0;

foreach ($arr as $aa) {
  $sum += $aa;
}
echo $sum;
