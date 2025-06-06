<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <from action=" index.php" method="post">
        <label> enter a number of count to :</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </from>
</body>

</html>

<?php

// for loop = repeat a block of code a ceriten number of times

$counter = $_POST["counter"]; // post method is used to get the value of the input field
// echo $counter; // display the value of the input field
// for ($i = 0; $i < $counter; $i++) {
//     echo $i . "<br>"; // display the value of i and add a line break
// }
for ($i = 10; $i > 0; $i -= 2) {
    echo    $i . "<br>";
}
