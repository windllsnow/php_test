<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    
        <title>006</title>





    </head>
    <body>

        <?php
        $grades = array(78,55,69,93,21);
        $name[0] = "滿q ";
        $name[1] = "二二";
        $name[2] = "三三";
        $name[3] = "陳會安";
        $name[4] = "械";
        $grades[2] = 65 ; //改值


        $total = 0 ;
        for ($i = 0; $i < count($grades) ; $i++){
            echo "$i => $grades[$i]"."<br/>";  //都這樣寫
            $total += $grades[$i];
        }
        echo "<br/>成績總分:".$total ."分<br/>";

        

        
        
        for($i =0; $i < count($name); $i++){
            echo "$i => $name[$i]"."<br/>";
        }
        echo "<br/>";
        


            
        
        


        ?>




        
    </body>
</html>