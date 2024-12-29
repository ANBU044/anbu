<?php
// Assign values to the numbers
$num1 = 25000; // You can change this value
$num2 = 5000;  // You can change this value

// Function to perform all arithmetic operations
function arithmeticOperations($num1, $num2) {
    echo "Number 1: $num1<br>";
    echo "Number 2: $num2<br><br>";

    // Addition
    echo "Addition ($num1 + $num2): " . ($num1 + $num2) . "<br>";

    // Subtraction
    echo "Subtraction ($num1 - $num2): " . ($num1 - $num2) . "<br>";

    // Multiplication
    echo "Multiplication ($num1 * $num2): " . ($num1 * $num2) . "<br>";

    // Division
    if ($num2 != 0) {
        echo "Division ($num1 / $num2): " . ($num1 / $num2) . "<br>";
    } else {
        echo "Division: Cannot divide by zero<br>";
    }

    // Modulus
    if ($num2 != 0) {
        echo "Modulus ($num1 % $num2): " . ($num1 % $num2) . "<br>";
    } else {
        echo "Modulus: Cannot find modulus with zero<br>";
    }
}

// Call the function with the predefined numbers
arithmeticOperations($num1, $num2);
?>
