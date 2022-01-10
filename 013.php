<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>013</title>
    <?php

    ?>
</head>

<body>
    <?php
    $data = array(200, 100, 50, 79, 96, 44, 32);
    print_r($data);
    echo "<br/>";
    if (in_array("50", $data)) {
        print "裡面有50 喔<br/>";
    }
    sort($data); //由小到大
    foreach ($data as $ele) echo "$ele" . "<br/>";

    $color = array("d" => "Blue", "a" => "Red", "b" => "Green", "c" => "White");
    print_r($color);
    echo "<br/>";
    if (($k = array_search("red", $color)) != false) {
        print "有___[$k]=> red____<br/>";
    } else if (($k = array_search("Red", $color)) == true) {
        print "有__[$k]=> Red__<br/>";
    } else {
        print "沒 red &Red";
    }

    echo "<br/><br/>";

    asort($color); //按小到大 排 value
    var_dump($color);

    echo "<br/><br/>";

    ksort($color); //按小到大 排 key
    var_dump($color);


    echo "<br/><br/>";






    ?>


</body>

</html>