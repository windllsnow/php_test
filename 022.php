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
            $username = $_POST["User"];
            $password = $_POST["Pass"];
            print "姓名: ".$username."<br/>";
            print "密碼: ".$password."<br/>";
            $address = $_POST["Address"];
            print "地址: <br/>".nl2br($address)."<br/>";
            $type = $_POST["Type"];
            print "種類: ".$type."<br/>";
        ?>  

        
    </body>
</html>
