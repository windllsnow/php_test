<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>014</title>
    <?php

    ?>
</head>

<body>

    <?php
    $str1 = "PHP and MySQL Web Programming"; // 字串變數
    $str2 = "   PHP與MySQL網頁設計範例教本 ";
    print("測試英文字串: \"" . $str1 . "\"<br/>");
    print("測試中文字串: \"" . $str2 . "\"<br/>");
    // 顯示字串長度
    print("英文字串長度: " . strlen($str1) . "<br/>");
    print("中文字串長度: " . strlen($str2) . "<br/>");
    // 轉換大小寫
    print("全部小寫: " . strtolower($str1) . "<br/>");
    print("全部大寫: " . strtoupper($str1) . "<br/>");
    // 刪除空白字元
    print("刪除兩端空白字元: \"" . trim($str2) . "\"<br/>");
    print("刪除開頭空白字元: \"" . ltrim($str2) . "\"<br/>");
    print("刪除結尾空白字元: \"" . rtrim($str2) . "\"<br/>");
    print("刪除結尾空白字元: \"" . chop($str2) . "\"<br/>");
    ?>
    <?php
    echo "<br/>";
    $str1 = "PHP與MySQL網頁設計範例教本"; // 字串變數
    $str2 = "username@company.com.tw";
    $str3 = 'C:\xampp\htdocs\ch07';
    print("測試字串1: \"" . $str1 . "\"<br/>");
    print("測試字串2: \"" . $str2 . "\"<br/>");
    print("測試字串3: \"" . $str3 . "\"<br/>");
    $pos = strpos($str1, "ASP");  // 搜尋子字串的位置
    if ($pos === false)
        echo "在字串1沒有找到字串: \"ASP\"<br/>";

    $pos = strpos($str1, "範例");
    echo "在字串1找尋字串: \"範例\" 位置: $pos <br/>";

    $pos = strrpos($str1, "PHP");
    echo "在字串1找尋字元: \"PHP\" 位置: $pos <br/>";

    $domain = strstr($str2, '@');  // 搜尋子字串
    print "網域名稱 => " . $domain . "<br/>";

    $dir = strchr($str3, "\\");
    print "取得路徑 => " . $dir . "<br/>";

    $dir = strrchr($str3, "\\");  // 反向搜尋子字串
    print "反向取得路徑 => " . $dir . "<br/>";
    ?>


</body>

</html>