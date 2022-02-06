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

        <title>action</title>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])){
            echo "<hr/>"."<br/>";
            echo "yes it works, submit  function is ok<br/><hr/>";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $maximun =10;
            $minimun =3;

            $name= array("Edwin","Peter","Student","Guest","Jane","Pika","Mohad","Maria","zzzz","0000");
            if(in_array($username, $name)) {
                echo " Hello , you can in now<br/><hr/>";
                
                if(strlen($password) > $minimun && strlen($password) < $maximun){
                    echo " password  OK   , your right  <br/><hr/>";

                }else if ($password == "0000"){
                    echo "wowwelcome". $username  ."password unique, hello  to been here<br/><hr/>";
                    
                }else {
                    echo "your password is ". "__secret____". "<br/>you won't know  haha !!<br/><hr/>";
                }
            }else{
                echo " Sorry , you can't in now<br/><hr/>";
            }
        
        } 



        ?>
    </body>
</html>
