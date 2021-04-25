<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <title>Create Box</title>
</head>
<body>
    <div class='content'>
      <?php 
        function createBox(int $width=200, int $height=150, string $text='Box A', string $bgColor='red'){
            $style='';
            $style='style="width: '.$width.'px; height: '.$height.'px; background: '.$bgColor.';"';
            echo '<div class="box" '.$style.'>'.$text.'('.$width.'x'.$height.')'.'</div>';
        }
        createBox(500,100,'Box A' );
        createBox(300,100,'Box B','#ff00eb');
        function thamchieu(&$x){
            $x++;
        }
        $x=1;
        echo '<div>Giá trị ban đầu của x là:'.$x.'<br>Sau khi dùng hàm tham chiếu đến biến x: '.thamchieu($x).$x.'</div>';
        $x=1;
        function thamtri($x){
            $x++;
        }
        echo '<div>Còn đây là tham trị'.thamtri($x).$x.'</div>';
      ?>
    </div>
</body>
</html>