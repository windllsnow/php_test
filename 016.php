<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>016</title>


</head>

<body>
    <?php
    $str1 = "How To Programming PHP"; // 字串變數
    $str2 = "How To Programming php";
    print("測試字串1: \"" . $str1 . "\"<br/>");
    print("測試字串2: \"" . $str2 . "\"<br/>");

    // 比較兩字串
    if (!strcmp($str1, $str2))
        echo "\$str1與\$str2相等<br/>";
    else
        echo "\$str1與\$str2不相等<br/>";


    // 區分英文大小寫的比較
    if (!strcasecmp($str1, $str2))
        echo "\$str1與\$str2不區分英文大小寫,相等<br/>";
    else
        echo "\$str1與\$str2不區分英文大小寫,不相等<br/>";


    // 只比較前幾個字元
    if (!strncmp($str1, $str2, 12))
        echo "\$str1與\$str2前12個字元,相等<br/>";
    else
        echo "\$str1與\$str2前12個字元,不相等<br/>";
    ?>

    <?php
    $str1 = "How To 'Programming' \PHP\ WebSite"; // 字串變數
    print("測試字串1: \"" . $str1 . "\"<br/>");

    // 在字元前加上反斜線
    echo addslashes($str1) . "<br/>";

    // 刪除字元前的反斜線
    echo stripslashes($str1) . "<br/>";

    // 轉換成HTML符號
    $str = "if (x < 5 && y >= 8) {  \n sum(); \n}\n";
    echo $str . "<br/>";
    echo nl2br(htmlentities($str));
    // 刪除HTML標籤
    $str = "<table><tr><td>陳會安</td></tr></table>";
    echo strip_tags($str);
    ?>


</body>

</html>