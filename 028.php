<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Hsuan_Chang (Jason) Teng" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index,follow" />
        <meat name="rating" content="General" />
        <meta target="_self" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/png" href="" />
        <link rel="bookmark" href="" />

        <title>028</title>

    </head>
    <body>
        <?php 
        $file = "028.php";
        // 顯示檔案屬性
        echo "檔案名稱: " . $file . "<br/>";
        echo "檔案類型: " . filetype($file) . "<br/>";
        echo "最後存取: " . 
            date("n/d/Y h:i:s", fileatime($file)) . "<br/>";
        echo "最後修改: " . 
            date("n/d/Y h:i:s", filemtime($file)) . "<br/>";
        echo "檔案大小: " . filesize($file) . " 位元組<br/>";
        echo "是否是目錄: [" . is_dir($file) . "]<br/>";
        echo "是否是檔案: [" . is_file($file) . "]<br/>";
        echo "是否可讀: [" . is_readable($file) . "]<br/>";
        echo "是否可寫: [" . is_writeable($file) . "]<br/>";
        echo "是否是上傳檔案: [".is_uploaded_file($file)."]";
        ?>


    </body>
</html>
