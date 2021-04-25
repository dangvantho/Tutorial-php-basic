<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<h3>
  <?php 
    $a=10;
    $b=20;
    $c="10";
    echo 'a=',$a,' ,b=',$b,'<br>';
    echo 'Tổng: ',$a+$b,'<br>';
    echo 'Hiệu: ',$a - $b,'<br>';
    echo 'Chia: ',$a/$b,'<br>';
    echo 'a++= ',$a++,' ,++a=',++$a,'<br>';
    $a=10;
    echo 'So sánh a=="10": ',($a=='10' ?? 'Đúng'),' ,so sánh a=="10": ',($a==="10"?'Đúng':'Sai');
  ?>
</h3>