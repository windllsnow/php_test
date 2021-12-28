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




        ?>
    </body>
</html>