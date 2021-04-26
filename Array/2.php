<?php
//   Show structure of array 
  $a=array(1,2,3,4);
  echo '<pre>';
  print_r($a);
  echo '</pre>';
//   Vòng lặp
  echo 'Mảng a: ';
  foreach($a as $key => $value){
      echo '<br>'.$value;
  }