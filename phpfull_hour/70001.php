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





<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Hsuan_Chang (Jason) Teng" /    >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index,follow" />
        <meat name="rating" content="General" />
        <meta target="_self" />
        <meta name="description" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" type="image/png" href="" />
        <link rel="bookmark" href="" />

        <title>70001</title>


    </head>

    <body>
        <?php
            $x = 1111;
            echo $x;

            echo pow(2,8);
            echo "<br>";
            echo rand(10,999);
            echo "<br>";
            echo sqrt(100);
            echo "<br>";
            echo floor(4.5);
            echo "<br>";
            echo ceil(4.5);
            echo "<br>";
            echo round(4.5);
            echo "<br>";


            $string = "Hello student Do you like the class";
            echo strlen($string)."<br>";
            echo strtolower($string)."<br>";

            $list = [32,342,423,232,321,64,346];
            echo max($list). "<br/>";


        ?>
        <?php
            echo rand(1,1000);
            $string1 = "agfsadgfsadfhujawisohdfji";
            $valueLength = strlen ($string1);
            echo $valueLength. "<br>";

            $values =  ['asdsfa',3242,'sdafas',$string1];
            $found = in_array($string1,$values); /** 前者 有 在後者 裡 =>true */
            if($found) {
                echo "wow , so good ";

            }else {
                echo "Oops , GG　ｂｙｅ!!";
            }
        ?>
        <form action = "action.php" method="post">
                <input type = "text" placeholder = "Enter  Username"  name = "username">
                <input type = "password" placeholder = "Enter Password"  name = "password">
                <br/>
                <input type = "submit"  name = "submit">

        </form>
        <?php
            
        ?>
    </body>
</html>
