<?php

$score =75;
if ($score>90) {
    echo "Grade A";
}
elseif ($score>70) {
    if ($score>=90) {
        echo "Grade A+";
    } elseif ($score==75){
        echo "It is a correct number<br>";
    }else{
        echo "Invalid number";
    }
    
}
echo "Increasing seqence are: ";
for($i=0;$i<=10;$i++){
    
    echo "$i". " ";
}
echo "<br>Decreasing Sequence are: ";
for($i=10; $i >5 ; $i--) { 
    echo "$i" . " " ;
}
echo "<br>";
echo "Square term is : ";
$a = 1;
while ($a <= 10) {
    $b = $a*$a;
   echo $b . " ";
   $a++;
}
echo "<br>Cube is :";
$a=20;
while ($a >= 15) {
    $b = $a*$a*$a;
    echo $b . " ";
    $a--;
}
echo "<br> Square from for loop ";
for ($m=10; $m >4 ; $m--) {   
    $n = $m * $m;
    echo $n . " " . "<br>";
}
for ($i=5; $i >=1; $i--) { 
    for ($j=5; $j >=1; $j--) { 
        echo " $i" . "$j";
    }
    echo "<br>";
}
$i=1;
$j=1;
while ($i <= 3) {
    while ($j <= 3) {
        echo "*" . " ";
        $j++;
    }
    $i++;
}
echo "<br>";
for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
      echo $j . " ";
    }
    echo "<br>";
}
echo "Now we are seeing different loop pattern<br>";
for ($i=5; $i > 0; $i--) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo $j . " ";
    }
    echo "<br>";
}
for ($i=5; $i > 0; $i--) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo "*" . " ";
    }
    echo "<br>";
}
for ($i=5; $i <55 ; $i+=5) { 
    echo "$i". " "."<br>";
}
for ($i=1; $i <=20 ; $i++) { 
    static $a=0;
    $a+=$i;
   
}
echo "Sum of total number is: $a";
for ($i=1; $i < 6; $i++) { 
    static $b=0;
    $b += $i * $i;
}
echo "<br>Sum of square is: $b";


?>