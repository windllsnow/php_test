<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>4.1</title>
    </head>
    <body>
        <?php
            $username = "ttt";
            $english = 88;
            print "php與mysql網頁的設計<br/>".
                "is ". $username . "is " . $english . "<br/>";
        ?>
        <?php
            $name = "myName";
            $$name = "陳六";
            
            echo "變數$ $name = ${$name}<br/>";// {}用來取
        ?>
        <?php
            $a = 1;
            $b = 2;
            echo $a,$b ."<br/>";// echo 和print 都能 用 .  和  用不用 () 都可以， 但echo 可以用， 連接變數
            //define("PI",3.1415026) 可以自行 建 立常數
            $statusOn = false;
            var_dump($statusOn);// 、判斷bool

            //0x3fc 16進位; 0234  8進位;
            //\n \r \t \\ \$ \" \nnn \xnn  逸出字元
            $c = NULL;
            $d = null;//不分大小寫

            echo "<br/>";

            function square(float|int $v) :int|float{
                return $v ** 2;//聯合型態
            }
            function square1(mixed $v):mixed{
                return $v ** 3;//混合型態
            }
            echo "square(2.1) = ". square(2.1)."<br/>";
            echo "square1(2.1) = ". square1(2.1)."<br/>";
            
            //運算子優先順序
            //比較運算子、邏輯運算子


            //太空運算子 右大-1;一樣0;左大1
            echo 4<=>3;
            
            //位元運算子 子串連接子

            //自動型態轉換
            

        ?>
        
    </body>
</html>