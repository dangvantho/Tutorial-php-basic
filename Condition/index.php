<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<h3>
  <?php
    $x=10;
    $y= 12;
    $c=13;
    echo 'a= '.$x.'<br>';
    echo 'b= '.$y.'<br>';
    echo 'c= '.$c.'<br>';
    if($x>$y){
        echo 'x có giá trị lớn hơn y';
    } else{
        echo 'x nhỏ hơn y';
    }
    echo '<br>';
    $max=$x;
    if($max<$y) $max=$y;
    if($max<$c) $max= $c;
    echo 'Giá trị lớn nhất trong 3 số là '.$max;
  ?>
</h3>