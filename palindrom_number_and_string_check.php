<?php

# Palindrom number checking and string checking also
$input = readline("Enter any number or string to check: ");

$new_input = strrev($input);

if($input == $new_input){
    echo "The string or the number is palindrom ! ";
} else {
    echo "The string or the number is not palindrom !";
}

?>