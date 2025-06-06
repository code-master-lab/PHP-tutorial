<?php
// ------------------------------
// MAIN LOGIC:
// Demonstrate how to convert between
// ASCII values and characters using chr() and ord() functions
// ------------------------------

// Convert ASCII value to character
// chr(77) returns the character for ASCII 77, which is 'M'
$char = chr(77);
echo "Character for ASCII 77 is: $char <br>";

// Convert character to ASCII value
// ord('M') returns the ASCII value of character 'M', which is 77
$ascii = ord('M');
echo "ASCII value for character 'M' is: $ascii";
?>
