<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<h3>
  <?php 
    $score=7;
    switch ($score) {
        case 6:
        case 7:
        case 8:
        case 9:        
        case 10:
            echo 'Bạn đã qua môn';
            break;
        default:
            echo 'Bạn không qua môn';
            break;
    }
  ?>
</h3>