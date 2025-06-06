<?php
// This is my first script in basic PHP
//Dollar symbol used to declare a variable and $_name is the actual name of the variable
// ********** STRING DATA TYPE **********
$name = "Vivek Raut"; // Declaring a string variable to store a name
$food = "pizza";       // Declaring a string variable for favorite food
$email = "fake@gmail.com"; // Declaring a string variable for email

// ********** INTEGER DATA TYPE **********
$age = 20;       // Storing age as an integer
$user = 2;       // Storing the number of users online
$quantity = 5;   // Storing quantity of items For example, 5 pizzas ordered 

// ********** FLOAT DATA TYPE **********
$gpa = 3.5;        // Storing GPA as a floating-point number
$price = 12.50;    // Storing price as a floating-point number
$valueofpi = 3.14; // Storing the value of Pi
$tax_rate = 0.00;  // Storing tax rate as a floating-point number

// ********** BOOLEAN DATA TYPE **********
$employed = true;  // Boolean variable, true means employed like 0 is false and 1 is true
$student = false;  // Boolean variable, false means not a student


$total = null; // Declaring a variable with null(0) value store some thing which have null value like zero

// ********** OUTPUT STATEMENTS **********

// Printing string values using echo
echo "Hi, {$name} <br>";
echo "I love {$food} <br>";
echo "You can contact me at {$email} <br>";

// Printing integer values using echo
echo "You are {$age} years old <br>";
echo "The {$user} users are online <br>";
echo "They want to buy {$quantity} items <br>";

// Printing float values using echo
echo "Your GPA is {$gpa} <br>";
echo "The value of Pi is {$valueofpi} <br>";
echo "My tax rate is {$tax_rate}% on my 12 lakh salary <br>";

// Printing boolean values using echo
// Boolean 'true' is displayed as '1' and 'false' as an empty string
echo "Are you employed? " . $employed . "<br>";
echo "Are you a student? " . ($student) . "<br>";

// ********** ADDITIONAL OUTPUT **********
// Using variables together in a sentence
echo "You get a voucher of {$quantity}x {$food}, on your name: {$name} <br>";
$total = $price * $quantity; // Calculating total price
echo "The total price of pizza is: {$total} <br>";
