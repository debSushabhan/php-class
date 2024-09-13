<?php

//Identify data types
$a = 30;
$b = "John";
$c = 15.67;
$d = True;

echo gettype($a) . "<br>";
echo gettype($b). "<br>";
echo gettype($c). "<br>";
echo gettype($d) . "<br>";


// Variable of variables
$a = "hello";
$$a = "world";
echo "$a" . "$hello" . "<br>";


//Type casting
$x = 14.8;
$y = (int) $x;
echo $y . "<br>";
$v = "35";
$u = boolval($v);
echo $u . "<br>";

$m = 123;
$n = doubleval($m);
echo $n . "<br>";
$abc = "WE are Going to Puri";
$def = intval($abc);
echo $def;


?>
