<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    
        <title>003</title>

        <?php
            //函數,  建議 放 head 裡
            function pageHeader() {
                print "<h3>php與mysql網頁設計</h3>";
                echo "<hr/>";
            }
            function pageFooter() {
                print "<hr/> (c)Copyright by xxx <br/>";
            }
            function rateExchange(int $amount, float $rate) : float {
                $result = $amount * $rate;
                return $result;
            }
            //傳值函數 function byValue($c){...}
            //傳址函數 function byRef(&$c){...}
        
                //預設參數值，命名參數
            function volume($length, $width=10, $height=15) : float  {
                print $length."x".$width . "x". $height. "= ";
                return $length*$width*$height;
            }
            //允許 null 用 ?
            function welcome(?string $name = null)   {
                if(is_null($name)) {
                    echo "Welcome !!<br/>";
                }else{
                    echo "Welcome $name!!<br/> ";
                }
            }
            
        
        ?>
        <?php
            $a = 1;
            $b = 2;

            function funcA($c){
                $a = 3;
                $b = 4;
                return $a. "__".$b."__".$c;
            }

            function funcB(){
                global $a, $b;
                $a = 5 ; $b = 6;
                return $a. "__".$b;
            }

        ?>

        <?php
            function nonStaticVar(){
                $count = 0; $count +=2;
                return $count."<br/>";
            }
            //靜態函數
            function StaticVar(){
                static $count = 0; $count +=2;
                return $count."<br/>";
            }
        ?>
    </head>

    <body>
        <?php
            pageHeader();
            pageFooter();

            $amount = 1000;
            $rate = 27.1;
            $result = rateExchange($amount, $rate);
            print "1000美=". $result. "元台幣<br/>";
            
            //指定變數值
            $l = 15 ; $w = 20 ;$h = 25 ;
            print "盒子體積: ". volume($l, $w, $h) . "<br/>";
            //使用命名參數呼 叫 函數
            print "盒子體積: " .volume(length:$l,width: 5,height: 20) . "<br/>";

            print welcome("John");

        ?>
        <?php
            
            echo $a."_____ ".$b ."<br/>";//原本
            echo funcA(1) ."<br/>";//給的參數值，若有指定的話無法改，若無即可改
            echo funcB()."<br/>";//用 global 後  全域變數 全改;
            echo $a."_____ ".$b ."<br/>";
        ?>
        <?php
            $v1 =nonStaticVar();
            $v2 =nonStaticVar();
            $v3 =nonStaticVar();
            echo $v1.  $v2 . $v3 ;
            //會存在記憶體  ，所以會累加
            $v11 = StaticVar();
            $v22 = StaticVar();
            $v33 = StaticVar();
            print "使用靜態變數:<br/>. $v11.$v22.$v33 <br/>";      

        ?>
    </body>
</html>