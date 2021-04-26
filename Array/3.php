<!-- Mảng đa chiều -->
<?php
  $a=array();
  $a[0]= array('math'=> 9, 'chemistry'=>8, 'physical'=> 9);
  $a[1]= array('math'=> 10, 'chemistry'=>9, 'physical'=> 9);
  $a[2]= array('math'=> 8, 'chemistry'=>7, 'physical'=> 9);
  if(!empty($a)){
      foreach($a as $key => $value){
          echo 'a['.$key.'] => ';
          $score=0;
          if(!empty($a[$key])){
              foreach($a[$key] as $keyChildren => $valueChildren){
                  echo $keyChildren.': '.$valueChildren.', ';
                  $score+=$valueChildren;
              }
          }
          $a[$key]['score']=$score;
          echo '<br>';
      }
  }
  echo 'Tổng điểm của người thứ nhất là: '.$a[0]['score'].'<br>';
  $x=array(1,2,3);
  $y=array(1,2,3);
  echo '<pre>';
  print_r($x);
  echo '</pre>';
  echo $x===$y ? 'Mảng x bằng mảng y': 'Mảng x khác mảng y';