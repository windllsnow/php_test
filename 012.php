<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>012</title>
    <?php
    //function sum(mixed ...$array)   
    // function sum(int ...$array) 
    function sum()
    {
        $count = func_num_args();
        echo "參數 個數： $count <br/>";
        for ($i = 0; $i < $count; $i++) {
            $para = func_get_arg($i);
            echo "參數$i=>$para  ";
        }
        $total = 0;
        $array = func_get_args();

        for ($i = 0; $i < $count; $i++)
            $total += $array[$i];
        echo "<br/> 參數總和： $total <br/>";
    }

    ?>


</head>

<body>
    <?php
    sum(31, 69);
    echo "----<br/>";
    sum(33, 33, 34);

    ?>

    <?php
    echo "<br/>--------------------<br/>";
    $a = array(34, 56);
    $b = array(23.1, 56.5, 90.2);
    echo array_sum($a);
    echo "<br/>--------------------<br/>";
    echo array_sum($b);
    ?>

</body>

</html>