<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>
    <title>018</title>


</head>

<body>
    <?php
    /*
    header("Location: 002.php");
    exit();
    echo "使用header()函數轉址到其他網頁或PHP程式<br/>";*/
    ?>
    <?php
    header("Refresh: 100"); // xx秒
    $value = rand(10, 60);  // 取得亂數值 (min,max)
    echo "更新的亂數值: " . $value . "<br/>";
    ?>
    <h3>PHP檔案在快取保留到 <br /></h3>
    <?php
    header("Expires: " . gmdate(
        "D, d M Y H:i:s",
        mktime(0, 0, 0, 12, 31, 2021)
    ) . " GMT");

    echo date(
        "D, d M Y H:i:s",
        mktime(0, 2, 0, 12, 31, 2021)
    ) . "<br/>";


    echo gmdate(
        "D, d M Y H:i:s",
        mktime(2, 0, 0, 12, 31, 2021)
    ) . " GMT" . "<br/>";
    echo gmdate(
        "D, H:i:s ,M d Y",
        mktime(1, 0, 0, 12, 31, 2021)
    ) . " GMT" . "<br/>";







    ?>





</body>

</html>