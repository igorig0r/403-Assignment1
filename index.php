<!DOCTYPE html>
<html>
<head>
   <title>PHP absoulte basics</title>
</head>
<body>

<?php
   //Show Text in a Browser

   echo 'Hello World!';
   echo '<br>';    
   //Create and Use Variables
   $var1 = 'Twinkle';
   $var2 = 'Star';
   echo $var1 . ' ' . $var2;
   echo '<br>';    $var1 = 'VAR1';
   $var2 = 'var2';
   echo $var1 . ' ' . $var2;
   echo '<br>';    
   
   //Arithmetic Operators and Variables

   $x = 10;
   $y = 7;    
   echo $x . ' + ' . $y .' = ' . $x + $y;
   echo '<br>'; echo $x . ' - ' . $y . ' = ' . $x - $y;
   echo '<br>'; echo $x . ' * ' . $y . ' = ' . $x * $y;
   echo '<br>'; echo $x . ' / ' . $y . ' = ' . $x / $y;
   echo '<br>'; echo $x . ' % ' . $y . ' = ' . $x % $y;
   echo '<br>';    

   //Arithmetic-Assignment Operators and Variables

   $num = 8;
   echo "Value is now $num";
   echo "<br>";
   echo "Add 2. Value is now " . ($num += 2);
   echo "<br>";
   echo "Subtract 4. Value is now " . ($num -= 4);
   echo "<br>";
   echo "Multiply by 5. Value is now " . ($num *= 5);
   echo "<br>";
   echo "Divide by 3. Value is now " . ($num /= 3);
   echo "<br>";
   echo "Increment value by one. Value is now " . ($num++);
   echo "<br>";
   echo "Decrement value by one. Value is now " . ($num--);
   echo "<br>";

   //Variable Content and Destruction

   var_dump("Igor");
   echo "<br>";
   echo "Igor";
   echo "<br>";
   var_dump(28);
   echo "<br>";
   var_dump(NULL);
   echo "<br>";

   //Concatenation of Strings

   $around = "around";

    echo 'What goes ' . $around . ' comes ' $around . '.';

   // Variable Data Types

   echo "Value is " . gettype('string');
   echo "<br>";
   echo "Value is " . gettype(1.);
   echo "<br>";
   echo "Value is " . gettype(true);
   echo "<br>";
   echo "Value is " . gettype(1);
   echo "<br>";
   echo "Value is " . gettype(NULL);
   echo "<br>";

   // KRAJ