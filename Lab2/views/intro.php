<?php

if ($slock == true)
{
    echo "<table border='1'>>";
    echo "<tr>";
    echo "<td> id </td>";
    echo "<td> Name </td>";
    echo "<td> Price </td>";
    echo "<td> Country </td>";
    echo "<td> Units_In_Stock </td>";
    echo "<td> Rating </td>";
    echo "<td> date </td>";
    echo "<td> Photo </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $searched_glasses->id . "</td>";
    echo "<td>" . $searched_glasses->product_name . "</td>";
    echo "<td>" . $searched_glasses->list_price . "</td>";
    echo "<td>" . $searched_glasses->CouNtry . "</td>";
    echo "<td>" . $searched_glasses->Units_In_Stock . "</td>";
    echo "<td>" . $searched_glasses->Rating . "</td>";
    echo "<td>" . $searched_glasses->date . "</td>";
    echo "<td>" .  "<img alt='hi' style='width: 50px;' src='http://localhost/php/omo/lab4/images/$searched_glasses->Photo' />" .  "</td>";
    echo "</table>";
}
else
{
    //  echo "<br>Invalid ID, Not found<br>";
}


if ($snlock == true)
{
    echo "<table border='1'>>";
    echo "<tr>";
    echo "<td> id </td>";
    echo "<td> Name </td>";
    echo "<td> Price </td>";
    echo "<td> Country </td>";
    echo "<td> Units_In_Stock </td>";
    echo "<td> Rating </td>";
    echo "<td> date </td>";
    echo "<td> Photo </td>";
    echo "</tr>";
    foreach ($searched_name as $elem)
    {
        echo "<tr>";
        echo "<td>" . $elem->id . "</td>";
        echo "<td>" . $elem->product_name . "</td>";
        echo "<td>" . $elem->list_price . "</td>";
        echo "<td>" . $elem->CouNtry . "</td>";
        echo "<td>" . $elem->Units_In_Stock . "</td>";
        echo "<td>" . $elem->Rating . "</td>";
        echo "<td>" . $elem->date . "</td>";
        echo "<td>" .  "<img alt='hi' style='width: 50px;' src='http://localhost/php/omo/lab4/images/$elem->Photo' />" .  "</td>";

        echo "</tr>";
    }


    echo "</table>";
}
else
{
    //  echo " Invalid name, Not found";
}