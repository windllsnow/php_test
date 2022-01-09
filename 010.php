<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>010</title>



    </head>

    <body>
        <?php
        //二維陣列
        $row0 = array(0, 01);
        $row1 = array(10, 11);
        $row3 = array(20, 21);
        $grades = array($row0, $row1, $row3);

        print_r($grades[2][0]);
        echo "<br/>";

        $total = 0;
        for ($j = 0; $j < count($grades); $j++) {
            $sum = 0;
            for ($i = 0; $i < count($grades[$j]); $i++) {
                print($grades[$j][$i] . " ");
                $sum += $grades[$j][$i];
                $total += $grades[$j][$i];
            }
            print("=>成績 小計： " . $sum . "<br/>");
        }
        print("==>成績總分：" . $total . "<br/>");

        ?>


    </body>

</html>