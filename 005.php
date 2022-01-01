<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <title>005</title>
        <?php
            function validPassword($pass){
                if(trim($pass)==""){
                    trigger_error("空字串",E_USER_ERROR);
                }
                if(strlen($pass)<=4){
                    trigger_error("太短",E_USER_WARNING);
                }
                if (is_numeric($pass)){
                    trigger_error("全數字",E_USER_WARNING);
                }
            }
        
            function myErrorHandler($type,$msg,$file,$line){
                switch($type) {
                    case E_USER_ERROR:
                        echo "自訂致命錯誤,<br/>";break;
                    case E_USER_WARNING:
                        echo "自訂警告錯誤,<br/>";break;
                    case E_USER_NOTICE:
                        echo "自訂注意錯誤,<br/>";break;
                }
                echo "檔 案：$file 第： $line 行 <br/>";
                echo "錯 誤 訊 息：  <b>$msg</b><br/>";
                if ($type == E_USER_ERROR ) {
                    echo "<font color =red>終止程式</font>";
                    die();
                }
            }
            set_error_handler('myErrorHandler');
        ?>



    </head>
    <body>
        
        <?php
        //php , txt ,inc  都可  require() 不管在哪  都會插入引用，沒有該檔 會 error; include 只會 警告
            require_once("./123.txt");
            include_once("./123123.txt");
            echo "<br/><br/>";

        ?>
        <!-- 錯誤: Parse Error(語法&語意), ___ Fatal Error/著重處理這兩個/Warnings Error__,/Notice Error(小注意錯誤-->
        <?php
            //E_ERROR
            //E_WARNING
            //E_NOTICE

            validPassword("1234567");
            validPassword("a12");
            validPassword("12345678");
            echo "測試產生使用者的自訂錯誤結束...<br/><br/>";

        ?>
    
        <?php
            //錯誤控制運算子 @  exit() die()
            $filename  =  "ch6-6-2.txt";
            $fp  = @fopen($filename, "r")or exit ("錯誤： 檔 案 $filename 開啟錯誤！ <br/>");
            fclose($fp);
            
        ?>

    </body>
</html>