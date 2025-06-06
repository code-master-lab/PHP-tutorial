<?php
// PHP script to demonstrate logical operators: AND (&&) and OR (||)

// Define a temperature value for testing
$temp = 20; 

// Logical AND (&&) - Both conditions must be true
if ($temp > 0 && $temp < 30) {
    echo "The weather is good because it's between 0 and 30 degrees.";
} else {
    echo "The weather is bad because it is either too cold (≤ 0°C) or too hot (≥ 30°C).";
}

echo "<br>"; // Line break for clarity in output

// Logical OR (||) - At least one condition must be true
if ($temp <= 10 || $temp >= 30) {
    echo "Extreme weather conditions detected!";
} else {
    echo "The weather is moderate, no extreme conditions.";
}

?>
