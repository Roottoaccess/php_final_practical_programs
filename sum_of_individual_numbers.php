<?php

$number = readline("Enter the number: ");
// $number = floor($number / 10);
// echo $number;
$sum = 0;
    while($number > 0){
        $result = $number % 10;
        $number = floor($number / 10);
            $sum += $result;
    }
echo "The result is: $sum";
?>