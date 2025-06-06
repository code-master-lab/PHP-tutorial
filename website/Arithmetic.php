<?php
// arithmetic operators
$a = 13; // $a is storing 10
$b = 7; // $b is storing 20
$c = $a + $b; // $c is storing the addition of $a and $b
echo "Addition of $a and $b is : $c <br>"; // printing the addition of $a and $b
$c = $a - $b; // $c is storing the subtraction of $a and $b
echo "Subtraction of $a and $b is: $c <br>"; // printing the subtraction of $a and $b
$c = $a * $b; // $c is storing the multiplication of $a and $b
echo "Multiplication of $a and $b is:$c <br>"; // printing the multiplication of $a and $b
$c = $a / $b; // $c is storing the division of $a and $b
echo "Division of $a and $b is: $c <br>"; // printing the division of $a and $b
$c = $a % $b; // $c is storing the modulus of $a and $b
echo "Modulus of $a and $b is:$c <br>"; // printing the modulus of $a and $b
$c = $a++; // $c is storing the increment of $a
$c =  $c + 3; // $c is storing the increment of $c ($c+=3;)
echo "Increment of $a is: $c<br>"; // printing the increment of $a
echo "Increment of $a is: $c<br>"; // printing the increment of $a
$c = $a--; // $c is storing the decrement of $a
echo "Decrement of $a is: $c  <br>"; // printing the decrement of $a


// Arithmetic Operators Examples
$a = 15;
$b = 6;

echo "<h3>Arithmetic Operators:</h3>";

// Addition (+)
echo "Addition: $a + $b = " . ($a + $b) . "<br>";        // 15 + 6 = 21

// Subtraction (-)
echo "Subtraction: $a - $b = " . ($a - $b) . "<br>";     // 15 - 6 = 9

// Multiplication (*)
echo "Multiplication: $a * $b = " . ($a * $b) . "<br>";  // 15 * 6 = 90

// Division (/)
echo "Division: $a / $b = " . ($a / $b) . "<br>";        // 15 / 6 = 2.5

// Modulus (%)
echo "Modulus: $a % $b = " . ($a % $b) . "<br>";         // 15 % 6 = 3

// Exponentiation (**)
echo "Exponentiation: $a ** 2 = " . ($a ** 2) . "<br>"; // 15² = 225


// Increment/Decrement Operators Examples
echo "<h3>Increment/Decrement Operators:</h3>";
$x = 5;

// Pre-increment (++$x)
echo "Pre-increment Example:<br>";
echo "Original value: $x<br>";           // 5
echo "++$x = " . ++$x . "<br>";         // Increments first, then returns 6
echo "New value: $x<br><br>";            // 6

// Post-increment ($x++)
$x = 5;
echo "Post-increment Example:<br>";
echo "Original value: $x<br>";           // 5
echo "$x++ = " . $x++ . "<br>";         // Returns 5 first, then increments to 6
echo "New value: $x<br><br>";            // 6

// Pre-decrement (--$x)
$x = 5;
echo "Pre-decrement Example:<br>";
echo "Original value: $x<br>";           // 5
echo "--$x = " . --$x . "<br>";         // Decrements first, then returns 4
echo "New value: $x<br><br>";            // 4

// Post-decrement ($x--)
$x = 5;
echo "Post-decrement Example:<br>";
echo "Original value: $x<br>";           // 5
echo "$x-- = " . $x-- . "<br>";         // Returns 5 first, then decrements to 4
echo "New value: $x<br>";                // 4


echo "<h3>Operator Precedence Examples:</h3>";

// Example 1: Basic precedence
$result = 3 + 5 * 2;
echo "3 + 5 * 2 = $result<br>"; 
// Output: 13 (Multiplication done first: 5*2=10, then 3+10=13)

// Example 2: Parentheses override precedence
$result = (3 + 5) * 2;
echo "(3 + 5) * 2 = $result<br>"; 
// Output: 16 (Parentheses force addition first: 3+5=8, then 8*2=16)

// Example 3: Mixed operators
$a = 10;
$b = 2;
$result = $a / $b ** 2;
echo "10 / 2² = $result<br>"; 
// Output: 2.5 (Exponentiation first: 2²=4, then 10/4=2.5)

// Example 4: Associativity (left vs. right)
$result = 8 - 3 + 2;
echo "8 - 3 + 2 = $result<br>"; 
// Output: 7 (Left-associative: (8-3)=5, then 5+2=7)

$result = 2 ** 3 ** 2;
echo "2³² = $result<br>"; 
// Output: 512 (Right-associative: 3²=9, then 2⁹=512)
?>

