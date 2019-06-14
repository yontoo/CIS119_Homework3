<!--Tray Harris
    CIS119-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Homework 3a
        </title>
    </head>
    <body>
    <?php
    $full_price = 29.99;
    $actual_price;
    $age = 3;
    if(age >= 55)
    {
        $actual_price = $full_price*0.25;
        echo number_format($actual_price, 2, '.','');
    }
    else if(age <= 6)
    {
        $actual_price = $full_price*0.50;
        echo number_format($actual_price, 2, '.','');
    }
    else
    {
        echo $full_price;
    }
    ?>
    </body>
</html>