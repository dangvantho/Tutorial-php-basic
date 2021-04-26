<?php
$x=[1,2,3,4];
$y=[2,1,2,4];
// Add new value to last or first array
array_push($x,1);
array_unshift($y,1);
echo '<pre>';
print_r($x);
print_r($y);
echo '</pre>';
// Delete value to last or first array
array_pop($x);
array_shift($y);
echo '<pre>';
print_r($x);
print_r($y);
echo '</pre>';
// Merge array
$z=array_merge($x,$y);
echo '<pre>';
print_r(array_merge($x,$y));
echo '</pre>';
// Chunk array
echo '<pre>';
print_r(array_chunk($z,3));
echo '</pre>';
// reduce 

$sum= array_reduce($x,function ($total, $item){
    return $total+$item;
} , 0);
echo $sum.'<br>';
// map
$newArray= array_map(function ($value){
    return $value+1;
},$x);
echo print_r($newArray);
// Sort array
echo '<br> Sort array with array_sort:';
sort($newArray);
echo print_r($newArray);