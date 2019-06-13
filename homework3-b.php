<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Homework 3b
        </title>
    </head>
    <body>
    <?php
    $chart = array
    (
        array(1,2,3,4,5,6,7,8,9),
        array(4,6,8,10,12,16,18),
        array(9,12,15,18,21,24,27),
        array(16,20,24,28,32,36),
        array(25,30,35,40,45),
        array(36,42,48,54),
        array(49,56,54),
        array(64,72),
        array(81),
    );
    for($i=0;$i<sizeof($chart);$i++)
    {
        for($j=0;$j<sizeof($chart[$i]);$j++)
        {
            echo $chart[$i][$j] . "<br>";
        }
    }

    ?>
    </body>
</html>