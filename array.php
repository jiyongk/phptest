<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $psd = array('seoyeon', 'hwayeon', 'sujin', 'hani');
    echo $psd[1].'<br>';
    echo $psd[2].'<br>';
    echo $psd[3].'<br>';
    echo $psd[0].'<br>';
    echo count($psd);
    array_push($psd,"hyunjung","hyein");
    echo count($psd);
    ?>
  <body>
</html>
