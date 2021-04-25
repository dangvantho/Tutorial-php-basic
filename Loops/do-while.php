<!DOCimage html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <title>While</title>
</head>
<body>
    <div class='content'>
      <h1>Chọn hình muốn vẽ</h1>
      <div class='image'>
        <?php 
           $i=1;
           $n=3;
           $type=isset($_GET['type']) ? $_GET['type'] : 0;
           do {
               $src='./image/'.$i.'.jfif';
               echo '<img class="image1" src='.$src.' >';
               $i++;
           } while ($type!=0 && $i<=$n);
        ?>
      </div>
      <div class='link'>
          <a href='?type=0'>Prev</a>
          <a href='?type=1' >Show all</a>

      </div>
    </div>
    
</body>
</html>