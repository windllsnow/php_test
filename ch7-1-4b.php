<!DOCTYPE html>
<html lang="en">>
   <head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ch7-1-4b.php</title>
   <?php
   // 函數參數的傳值呼叫
      function arrayByRef($a) {
         $a[0] = 0;   // 將索引0設為0
   }
   ?>
   </head>
   <body>
      <?php 
         $b = array(1, 2, 3, 4);  // 指定陣列元素
         arrayByRef($b);
         echo "呼叫arrayByRef(b)函數後: <br/>";echo "\$b=>";print_r($b); //只有函數裡有效
         echo "<br/>";
      ?>
   </body>
</html>