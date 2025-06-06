<?php
// 1️⃣ Simple function without parameter
function sayHello() {
    echo "Hello from a simple function!<br>";
}

// 2️⃣ Function with one parameter
function greetUser($name) {
    echo "Hello, " . $name . "!<br>";
}

// 3️⃣ Function with two parameters and return value
function add($a, $b) {
    return $a + $b;
}

// 4️⃣ Function with default parameter
function greet($name = "Guest") {
    echo "Welcome, " . $name . "!<br>";
}

// 5️⃣ Using a built-in PHP function
function showStringLength($string) {
    echo "The length of '" . $string . "' is: " . strlen($string) . "<br>";
}

// Calling the functions
sayHello();                          // Simple function
greetUser("Vivek");                  // Function with parameter
echo "Sum is: " . add(5, 7) . "<br>"; // Function with return value
greet();                             // Function with default value
greet("Vivek");                      // Function with passed value
showStringLength("PHP Functions");   // Built-in function demo
?>
