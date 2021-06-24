<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>

<body>
    <div class="container"> This is my 1st PHP doc
        <br>
        <?php
        echo "Helloworld and welcome to the backend side  ";
        echo " <br> <br>";

        // Variables in PHP 
        $var1 = 10;
        $var2 = 20;
        echo " Value of a : ";
        echo $var1;
        echo " <br> ";
        echo " Value of b : ";
        echo $var2;
        echo " <br> <br>";

        // Operators in PHP


        echo " Arithmetic operators = ";
        echo " <br> <br>";
        echo " Addition : ";
        echo $var1 + $var2;
        echo " <br>";
        echo " Subtraction : ";
        echo $var2 - $var1;
        echo " <br> ";
        echo " Product : ";
        echo $var1 * $var2;
        echo " <br>";
        echo " Quotient : ";
        echo $var2 / $var1;
        echo " <br> ";
        echo " Remainder : ";
        echo $var2 % $var1;
        echo " <br> <br>";


        echo " Assignment Operator = ";
        $newvar = $var1;
        echo " <br> <br>";
        echo " The value of c is ";
        echo $newvar;
        echo " <br> ";
        $newvar += 1;
        echo " Incremented value of c :";
        echo $newvar;
        echo " <br> ";
        echo " Decremented value of c : ";
        $newvar -= 1;
        echo $newvar;
        echo " <br> <br>";
        //  Similarly we have /= andd *=


        echo " Comparison Operators";
        echo " <br> <br>";
        echo " a < b : ";
        echo var_dump($var1 < $var2);
        echo " <br> ";
        echo " a > b : ";
        echo var_dump($var1 > $var2);
        echo " <br> <br>";
        //  Similarly we have != <= >= ==

        echo " Increment/Decrement Operators ";
        echo " <br> <br>";
        echo " value of a : ";
        echo $var1;
        echo "<br>";
        echo " a++ : ";
        echo $var1++;
        echo "<br>";
        echo " Post increment : ";
        echo $var1;
        echo " <br>";
        echo " ++a : ";
        echo ++$var1;
        echo " Pre increment ";
        echo " <br> <br>";
        //  Similarly we have a-- --a 

        echo " Logical Operators";
        echo " <br> <br>";
        echo " true AND true : ";
        $myvar =  var_dump(true and true);
        echo $myvar;
        echo " <br> ";
        echo " false AND true : ";
        $myvar =  var_dump(false and true);
        echo $myvar;
        echo " <br> ";
        echo " true AND false : ";
        $myvar =  var_dump(true and false);
        echo $myvar;
        echo " <br> ";
        echo " false AND false : ";
        $myvar =  var_dump(false and false);
        echo $myvar;
        echo " <br> <br>";

        echo " true OR true : ";
        $myvar =  var_dump(true or true);
        echo $myvar;
        echo " <br> ";
        echo " false OR true : ";
        $myvar =  var_dump(false or true);
        echo $myvar;
        echo " <br> ";
        echo " true OR false : ";
        $myvar =  var_dump(true or false);
        echo $myvar;
        echo " <br> ";
        echo " false OR false : ";
        $myvar =  var_dump(false or false);
        echo $myvar;
        echo " <br> <br>";

        echo " true XOR true : ";
        $myvar =  var_dump(true xor true);
        echo $myvar;
        echo " <br> ";
        echo " false XOR true : ";
        $myvar =  var_dump(false xor true);
        echo $myvar;
        echo " <br> ";
        echo " true XOR false : ";
        $myvar =  var_dump(true xor false);
        echo $myvar;
        echo " <br> ";
        echo " false XOR false : ";
        $myvar =  var_dump(false xor false);
        echo $myvar;
        echo " <br> ";

        ?>

        <?php

        //Data types : String, integer, float, Boolean, Array, Object, define -> constants

        ?>
    </div>


</body>

</html>