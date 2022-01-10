<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011</title>

    <!-- foreach ($scores as $element) -->
    <!-- foreach ($arr as $key => $value) -->
</head>

<body>
    <?php
    //結合陣列
    // 沒有指定,鍵值是0
    $arr = array(
        "color" => "red", "name" => "Jane",
        "shape" => "circle", 100
    );
    print_r($arr);

    if (!isset($arr["type"])) {
        $arr["type"] = "PHP";
        echo "<br/>新增ok<br/>";
    }
    foreach ($arr as $key => $value) echo "$key => $value" . "<br/>";

    echo "<br/>";

    $arr["color"] = "紅色";  // 更改陣列元素值
    $arr["name"] = "江小魚";
    $arr["shape"] = "圓形";
    $arr[] = 50;

    unset($arr["type"]);   // 刪除結合陣列元素
    print_r($arr);

    echo "<br/>";

    $weekday = array(
        1 => "Mon", "Tue", "Wed", "Thu",
        "Fri", "Sat", "Sun"
    );
    // 顯示陣列元素
    for ($i = 1; $i <= count($weekday); $i++)
        echo "$i : $weekday[$i] ";


    echo "<br/><hr/><br/>";




    ?>

    <?php
    // 使用array()指定結合陣列的元素
    $arr = array(
        "color" => "黑色", "name" => "陳會安",
        "shape" => "三角形", "fruit" => "蘋果"
    );
    print_r(array_keys($arr));   // 顯示鍵值

    echo "<br/>";

    print_r(array_values($arr)); // 顯示元素值

    echo "<br/><hr/><br/>";

    // 使用內部陣列指標走訪陣列
    reset($arr); // 重設 "指針"   到開頭 陣列元素
    echo "第1個元素: " . current($arr) . "/key:" . key($arr) . "<br/>";

    next($arr); // 下1個元素
    echo "下1個元素: " . current($arr) . "/key:" . key($arr) . "<br/>";

    end($arr); // 最後1個元素
    echo "最後1個元素: " . current($arr) . "/key:" . key($arr) . "<br/>";

    prev($arr); // 前1個元素
    echo "前1個元素: " . current($arr) . "/key:" . key($arr) . "<br/>";

    reset($arr);
    print_r($arr);


    ?>

</body>

</html>