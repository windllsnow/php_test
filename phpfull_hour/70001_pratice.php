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

        <title>7-1</title>
    </head>

    <body>
        <?php
            if(isset($_POST['submit'])){
                echo  "submit";
            }
        ?>
        <form action ="70001_pratice.php" method="post">
            <input type = "submit" name = "submit" value = "Submit">
        </form>

    </body>
</html>
