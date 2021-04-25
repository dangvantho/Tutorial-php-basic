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
        <a href='?image=1'>
            <img src='./image/ex_for_1.jfif' alt=''>
        </a>
        <a href='?image=2'>
            <img src='./image/ex_for_4.jfif' alt=''>
        </a>
      </div>
      <div class='draw'>
        <div>
          <?php 
            $image=isset($_GET['image']) ? $_GET['image'] : 0;
            $n=5;
            $i=1;
            $result='';
            if($image==1){
                while($i<=$n){
                    $result.=str_repeat('*',$i).'<br>';
                    $i++;
                }
            }
            elseif($image==2){
                while($i<=$n){
                    $space= $n-$i;
                    $result.=str_repeat('&nbsp;&nbsp;',$space).str_repeat('*',2*$i-1).'<br>';
                    $i++;
                }
            } 
            echo $result;
          ?>
        </div>
      </div>
    </div>
    
</body>
</html>