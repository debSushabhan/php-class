<?php
$height = 7;
    if ($height== 6) {
    echo "You are allow to a Kolkata Police";
} 
else
{
    echo "You are not eligible for kolkata police";
}
echo "<br>";
$amount= 40000;
if($amount<30000){
echo "You have not discount";
}
else{
    echo "You have get discount";
}


//Arithmetic operations
$a = 10;
$b = 5;
//echo $a -= $b;
echo "Addition is: " . $a + $b . "<br>";
echo "Subtraction is: " . $a - $b . "<br>";
echo "Multiplication is: " . $a * $b . "<br>";
echo "Division is: " . $a / $b . "<br>";
echo "Modulo is: " . $a % $b . "<br>";

$c = 2;
echo "Exponential is: " . $a ** $c . "<br>";

// Assignment Operator
$x = 20;
$y = 5;
$x += $y;
echo "Addition assignment is: $x <br>" ; 
$x = 15;
$y = 9;
$x -=$y;
echo "Subtraction assignment is: $x <br>" ;
$x *= $y;
echo "Multiplication assignment is: $x <br>";
$x = 30;
$y = 5;
$x /= $y;
echo "Division assignment is:  $x <br>";
$x = 12;
$y = 5;
$x %= $y;
echo "Modulo assignment is: $x <br>";

// Operator & Expressions
$x = 10;
$y = "10";
$result = ($x == $y);
echo $result;

$result2 = !($x===$y);
echo "<br>Print value is: $result2";

$a = 12;
$b = 13;
$result = ($a < $b);
echo "<br> $result";
$a=12;
$b =16;
$result = ($a <= $b);
echo "<br> $result";

$a = 18;
$b = 13;
$result = ($a > $b);
echo "<br> $result";

$a = 15;
$b = 15;
$result = ($a >= $b);
echo "<br> $result";

//Logical Operators
$x = 6;
$y =12;
$result = ($x>5 && $y<16);
echo "<br> $result";
$result = ($x<=8 || $y>20);
echo "<br> $result";
$result2=!($x==$y);
echo "<br> $result2";

//Conditional expressions
$age = 25;
if($age > 20){
    echo "<br>You are great man";
}
$number = 10;
if ($number>15) {
    echo "<br>Number is greater than value";
} else {
    echo "<br>Number is less than value";
}

$abc = 11;
if ($abc>15) {
    echo "<br>Print the value: $abc";
} elseif($abc==10) {
    echo "<br>Print the value: $abc";
} elseif ($abc <= 8) {
    echo "<br>The value is less than $abc";
}else{
    echo "<br>The value does not follow any conditions";
}

$flower = "rose";
switch ($flower) {
    case 'sunflower':
        echo "<br>Sunflower";
     break;
     case 'Hydrangea':
        echo "<br>Hydrangea";
        break; 
    case 'rose':
        echo "<br>rose";
        break;  
    
}
$fruit = "Mango";
switch ($fruit) {
    case 'Litchi':
        echo "Litchi";
        break;
    case 'jackfruit':
        echo "jackfruit";
        break;
    case 'Mango':
        echo "<br>mango<br>";
        break;
    
    default:
        # code...
        break;
}
$vegetable = "broccoli";
switch ($vegetable) {
    case 'papaya':
        echo "Papaya";
        break;
    case 'lobia':
        echo "lobia";
        break;
    case 'broccoli':
        echo "broccoli";
        break;
}


?>