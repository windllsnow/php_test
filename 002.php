<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>002</title>


    </head>
    <body>
        <?php
            //? :條件運算子
            $hour = 15;
            $str = ($hour >= 12) ? " PM" : " AM";
            $hour = ($hour >= 12) ? $hour-12 : $hour;
            print "目前時間為 ： " . $hour . $str;

            //Match 運算子

            $grade = 65;
            $result = match(true){
                $grade > 80 => "甲等！<br/>",
                $grade >=70 => "乙等！<br/>",
                $grade >=60 => "丙等！<br/>",
                default => "丁等！<br/>",
                
            };
            print "<br/><hr/> My grade . $grade.  <br/>". $result;
        ?>
        <?php
            //迴圈
            $total = 0;
            for ($i = 1 ; $i <= 10; $i++){
                print "|". $i;
                $total += $i;
            }
            print "| <br/> for 1~10 = ". $total ."<br/><hr/>";

            //while
            $result1 = 1;
            $n = 1;
            while ($result1 <= 100){
                $result1 = $result1 * $n;
                $n += 1;//階層
            }
            $n -= 1;// x階層 後 x+1 所以要-1
            print $n . "!=" . $result1 . "<br/><hr/>";
        ?>
        <?php
            //do_while 迴圈
            $year = 0;
            $amount =1000;
            $rate = 0.12;

            do {
                $interest = $amount *$rate;
                $amount = $amount + $interest;
                $year +=1;

            }while ($amount < 2000);

            print $year. "金額= " . $amount .  "<br/><hr/>" ;
            
        ?>
        <?php
            //break,continue
            $i = 1;
            $total2 = 0 ;
            do {
                print("|". $i);
                $total2 += $i;
                $i++;
                if ( $i > 15 ) break;

            } while ( true );
            print  "<br/> 1~". $i-1 ." 和=" . $total2 . "<br/><hr/>" ;
            
            $j = 1;
            $total3=0;
            for ( $j = 1 ; $j <= 15; $j++ ) {
                if ( ( $j % 2 ) == 1 ) continue;
                print "|" . $j ;
                $total3 += $j;
            }
            print "<br/> 1~15 偶數和". $total3 . "<br/><hr/>";
            

        ?>

        <table border = "1">
            <?php
            //表格標題列
            print "<tr><td>*</td>";//第一列  放一個 *
            for ( $i = 1 ; $i <= 9; $i++ ) 
                print "<td><b>". $i ."</b></td>";//依序 放1~9
            print "</tr>";
            //巢狀迴圈
            for ($k = 1 ; $k <= 9; $k++ ) {
                print "<tr>";
                print  "<td><b>" . $k . "</b></td>"; // 第1列 粗體
                $l = 1;
                while ( $l <=9 ){
                    print"<td>";
                    print $k ."*" .$l ."=" . $j*$l;
                    print"</td>";//跑1*1 ~ 1*9  放 第1 列  跳 出 去 跑第2列
                    $l++;
                }
                print "</tr>";
            }

            

            ?>    

            
        </table>
        

    </body>
</html>