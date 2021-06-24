<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <div class="container">
      <?php
       
       $lang = array("Python", "C++", "Java", "PHP", "HTML", "CSS");
       echo $lang[0] ;
       echo "<br>" ;
       echo $lang[1] ;
       echo "<br>" ;
       echo $lang[2] ;
       echo "<br>" ;
       echo $lang[3] ;
       echo "<br> <br>" ;

       echo " Length of array = " ;
       echo count($lang);
       echo "<br> <br> ";
       $a = 0;
       while($a < count($lang)){
           echo " The value of a is : ";
           echo $a ;
           echo  "<br>";
           $a++;
       }
       echo "<br>" ;
       for ($a=0; $a < 10 ; $a++) { 
           echo " For Loop Iteration ";
           echo $a ;
           echo "<br>";
       }
       echo "<br> foreach Loop <br> ";
       foreach ($lang as $value) {
          echo " Language is : ";
          echo $value ;
          echo "<br>";
       }

       function print10(){
           echo "<br> Inside function print10() ";
       }

       function print_Num( $num){
           echo "<br> Inside function print_Num() ";
           echo "<br> Your number is ";
           echo $num ;
       }

       print10();
       print_Num(100);
    ?>

    </div>

</body>

</html>