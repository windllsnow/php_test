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

            echo "<br/>";
            
            //位元運算子 子串連接子

            //自動型態轉換，字串->整數->浮點數
            $e = 100;
            $f = 1.1;
            $g = "30";
            echo $e +  $f + $g;
            
            //強迫型態轉換
            //(int) (real)(double)(float)(string)(array)(object)

            $h = (int)($e / $f);

            echo "<br/>". $h. "<br/><br/>";

        ?>
        <?php

            //流程
            $grade = 95;
            if ($grade >= 90){
                print $name. "成績： ". $grade . "很棒！<br/>";
            }
            elseif ( $grade >= 60){
                print $name. "成績： ". $grade . "及格！ <br/>";
            }else{
                print $name."成績： ". $grade . "不及 格！ <br/>";
            }

            $GPA = 'C';
            echo "<br/>學生成績： $GPA <br/>";
            switch ($GPA){
                case 'A':
                    print "學生成績超過80<br/>";
                    break;
                case 'B':
                    print "學生成績超過70<br/>";
                    break;
                case 'C':
                    print "學生成績超過60<br/>";
                    break;
                default:
                    print "學生成績不及格<br/>";

            }
        ?>
        
        
    </body>
</html>