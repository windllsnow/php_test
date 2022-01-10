<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
</head>

<body>
    <?php
    $scores = array(22, 12, 16, 30, 45);
    $total = 0;

    foreach ($scores as $element) {
        echo "$element" . "<br/>";
        $total += $element;
    }
    echo "<br/> 得分總和：  " . $total . "</br/>";
    print_r($scores); //印出整個Array

    ?>






</body>

</html>