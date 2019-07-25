<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="psd.php">MyPSD</a></h1>
    <ol>
    <?php
      $list = scandir('./data');
      $i = 0;
      while($i < count($list)){
        if($list[$i] !='.'){
          if($list[$i] !='..'){
        echo "<li><a href=\"psd.php?id=$list[$i]\">$list[$i]</a></li>\n";
          }
        }
        $i = $i + 1 ;
      }
     ?>
   </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }
       ?>
    </h2>
      <?php
      if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
      } else {
        echo "하하하 나의 PSD 들 !!";
      }
     ?>
  </body>
</html>
