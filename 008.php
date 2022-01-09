<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
        function arrayByValue($a) {
                $a[0] = 0 ;
                return $a;
        
            }
        ?>
    </head>
    <body>
        <?php
            $b = array(1,3,5,7,9);
            $bb = arrayByValue($b); //進函數 會改
            print_r($bb);

            echo "<br/>";

            print_r($b);//不進 不會改

            


        ?>


        
    </body>
</html>