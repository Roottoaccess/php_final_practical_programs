<?php

$number = readline("Enter the number: ");

$fact = 1;
for($i = $number ; $i >= 1 ; $i--)
{
    $fact *= $i;
}
echo $fact;

?>