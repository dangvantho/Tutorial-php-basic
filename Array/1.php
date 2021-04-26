<?php 
//   Khai báo mảng
  $a=array();
  $a[]=1;
  $a[]=2;
  $a[]=3;
  echo 'Mảng a có '.count($a).' phần tử. Phần tử thứ nhất là: '.$a[0];

//   Khai báo kiểu 2
  $b=array(1,2,34);
  echo '<br><br>';
  echo 'Mảng b có '.count($b).' phần tử.Mảng này '.(!empty($b) ? 'không rỗng': 'rỗng');
//   Khai báo kiểu 3
  $c=array();
  $c[1]=2;
  echo '<br><br>';
  echo 'Mảng c có phần tử thứ nhất và thứ 2 là: '.(isset($c[0]) ? $c[0]:'không có').', '.$c[1];
  echo '<br><br>Mảng c có: '.count($c);
?>