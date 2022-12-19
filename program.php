<!-- Print Fibonacci series -->

<?php

$num = 0;
$n1 = 0;
$n2 = 1;
$sum = 0;
echo "<h2>Fibonacci series for first 12 numbers: </h2> \n";
while ($num1<10) {
    $sum = $n1 = $n2;
    echo $sum . " ";
    $n1 = $n2;
    $n2 = $sum;
    $num = $num + 1;
    } 

?>


<!-- Print Reverse of any number -->

<?php 

$num = 123;
$revnum = 0;
while($num > 1) {
    $remainder = $num % 10;
    $revnum = ($revnum * 10) + $remainder;
    $num = ($num / 10);
}
echo "Reverse Numner is :" .$revnum. " \n";

?>
