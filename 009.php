<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>009</title>
        <?php
        function  showArray($title,$arr) {
            echo $title; print_r($arr);echo "<br/>";
        }
        ?>
    </head>
    <body>
        <?php
            $tips = array(10, 20, 30, 40);
            showArray("參數陣列:",$tips);

            $result = array_pad($tips, -6, 50); // 擴充陣列元素
            showArray("向左擴充陣列:",$result); // [-6] 位置 補
            $result = array_pad($tips, 5, 50);
            showArray("向右擴充陣列:",$result);// [5] 位置 補


            $tips = array(10, 20, 30, 30);
            $result = array_unique($tips); // 刪除""重複""的元素
            showArray("刪除重複元素:",$result);

            
            $tips = array(10, 20, 30, 40);
            $offset = 1;   $len = 2;
            array_splice($tips, $offset, $len); // 刪除陣列元素
            showArray("刪除位置[1]的元素，這動作2次:",$tips);

            $tips = array(10, 20, 30, 40);
            array_splice($tips,1,1,array(40,50)); // 取代陣列元素
            showArray("刪除位置[1]的元素1次, 後用陣列取代:<br/>",$tips);

            $tips = array(10, 20, 30, 40);
            $result = array_reverse($tips); // 反轉陣列
            showArray("反轉陣列:",$result);


            list($var1, $var2, $var3) = $tips;  // 將陣列轉換成變數
            echo "0: $var1, 1: $var2, 2: $var3<br/>"
            ?>



        
    </body>
</html>