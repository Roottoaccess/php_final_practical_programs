<?php
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");

$operation = readline("Enter the operation: ");

switch($operation){
    case '+':
        $reasult = $num1 + $num2;
        echo "Result: $reasult";
        break;
        case '-':
            $reasult = $num1 - $num2;
            echo "Result: $reasult";
            break;
            case '*':
                $reasult = $num1 * $num2;
                echo "Result: $reasult";
                break;
                case '/':
                    $reasult = $num1 / $num2;
                    echo "Result: $reasult";
                    break;
                    default:
                    echo "Enter the currect operation";
                    break;
}

?>