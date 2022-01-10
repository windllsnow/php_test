<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>004</title>

    <?php
    //匿名函數
    $func = function ($length, $width, $height) {
        echo $length, "*", $width, "*", $height;
        return $length * $width * $height;
    }

    ?>
    <?php
    //回撥函數
    //只能匿名函數
    function callFunc1(Closure $closure)
    {
        $closure();
    }

    //匿名函數& 一般函數 都可
    function callFunc2(callable $callback)
    {
        $callback();
    }

    ?>
    <?php
    $hello = function () {
        echo "Hello<br/>";
    }
    ?>
    <?php
    function hi()
    {
        echo "Hi<br/>";
    }
    ?>
    <?php

    //閉 包 函數，讀取 函數外的 變數
    $weight = 75;
    $bmi = function ($height) use ($weight) {

        $height = $height  / 100.0;
        return $weight / $height / $height;
    }
    ?>
    <?php

    ?>




</head>

<body>
    <?php
    $l = 15;
    $w = 15;
    $h = 15;
    print "盒子體積" . $func($l, $w, $h) . "<br/>";
    ?>
    <?php

    //callFunc1("hi");
    callFunc1($hello);
    callFunc2("hi");
    callFunc2($hello);


    ?>
    <?php

    $h = 175;
    echo "BMI=  " . $bmi($h) . "<br/>";
    ?>





</body>

</html>