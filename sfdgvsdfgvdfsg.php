<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--類別-->
        <?php
            $x =111;
            class foo {
                function do_foo($a) {
                    echo "doing foo." . $a;
                }
            }
            $bar = new foo();
            $bar -> do_foo($x);
        ?>

        <?php
            class SimpleClass{
                // property declaration
                public $var = 'a  value';
                // method declaration
                public function displayVar() {
                    echo $this->var. "<br/>";
                }
            }
            $simple = new SimpleClass(); //這一行建立物件
            echo"<br/>". $simple->var . "<br/>"; //印出物件裡$var的值
            $simple->displayVar(); //乎叫物件裡的displayVar()函式
            
        ?>
        <?php
            $obj = (object) array('1' => 'foo');
            
            var_dump(key($obj)); // PHP 7.2.0 后输出 'string(1) "1"'，之前版本输出  'int(1)' 
        ?>

        <?php
        


            $aaa = array("apple", "banana","cherry");
            $aaa1 = (object) $aaa;
            var_dump($aaa1); // PHP 7.2.0
        ?>
    </body>
</html>