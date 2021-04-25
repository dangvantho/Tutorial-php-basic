<meta http-equiv='Content-Type' content='text/html;charset=UTF-8' />
<h3>
  <?php
   $x= 100;
   echo "Đây là biến ban đầu ", $x;
   echo "<br/>";
   $x= "Thay đổi biến";
   echo $x;
   echo "<br>Khá là giống JS, biến có thể thay đổi kiểu giá trị<br/> ";
   echo "Hàm gettype(biến):", gettype($x);
   echo "Hàm var_dump(biến): ",var_dump($x);
   echo "<br> <br>Ép kiểu";
   $number=123.234;
   echo "Số sau khi ép kiểu thành số nguyên: ",(int)$number;
   echo "<br/>";
   echo "Số sau khi ép kiểu thành chữ: ", (string)$number;
   echo "<br/>";
   echo "Dùng hàm settype(biến, kiểu dữ liệu(string)): ",settype($number,"float");
   define("age",32);
   echo "<br/>";
   echo "Hằng số: ",age;
  ?>
</h3>

