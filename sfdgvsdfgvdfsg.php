<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            class foo {
                function do_foo() {
                    echo "doing foo.";
                }
            }
            $bar = new foo();
            $bar -> do_foo();
        ?>
    </body>
</html>