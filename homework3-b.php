<!--Tray Harris
    CIS119-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Uses CSS to style the table and its data to have borders around them, border-collapse makes them look like they're actual
        connected cells instead of individual, floating ones. -->
        <style>
            table, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
        <title>
            Homework 3b
        </title>
    </head>
    <body>
    <?php
    /* Creation of the multidimensional array. All it is is an array with multiple arrays inside of it.
    It might be easier to think of each entry inside of the nested arrays as columns, and the entries into the $chart array as rows of a multiplication chart.
    E.g the first array and its 4th entry (1x4) equals 4. */
    $chart = array
    (
        array(1,2,3,4,5,6,7,8,9),
        array(4,6,8,10,12,14,16,18),
        array(9,12,15,18,21,24,27),
        array(16,20,24,28,32,36),
        array(25,30,35,40,45),
        array(36,42,48,54),
        array(49,56,54),
        array(64,72),
        array(81),
    );

    //Creates the table
    echo "<table>";

    //Nested for loop first accesses an array from the $chart array (i) and then loops through that array's data (j).
    //It does this for as long as i is smaller than the size of the array it's accessing. 
    for($i = 0; $i < sizeof($chart); $i++)
    {
        //Create a new table row.
        echo "<tr>";
        for($j=0, $multiplicand = $i + 1; $j < sizeof($chart[$i]); $j++, $multiplicand++)
        {
            /*                   This is how you access a multidimensional array.   v                                  */
            echo "<td align=\"center\">" . ($i+1) . "x" . $multiplicand . "=" . $chart[$i][$j] . "</td>";
            //Create a new table data entry                                                     End data entry.
        }
        echo "</tr>";
        //End of row
    }
    echo "</table>";
    //Done with the table.
    ?>
    </body>
</html>