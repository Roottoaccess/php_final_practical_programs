<?php
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$num3 = readline("Enter the third number: ");

if($num1 > $num2 && $num1 > $num3){
    echo "The greatest number is: $num1";
} else if($num2 > $num1 && $num2 > $num3)
{
    echo "The greatest number is: $num2";
} else {
    echo "The greatest number is: $num3";
}

?>