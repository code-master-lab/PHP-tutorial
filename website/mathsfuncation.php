<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mathsfuncation.php" method="post">
        <label>x:</label><br>
        <input type="text" name="x"><br>
        <label>y:</label><br>
        <input type="text" name="y"><br>
        <input type="submit" value="total"><br>
    </form>
</body>

</html>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
$total = null;
 $total = abs($x); // returns the absolute value of x like you have -5 it will return 5
// $total = round ($x); // returns the rounded value of x like you have 5.6 it will return 6
// $total = ceil($x); // returns the smallest integer greater than or equal to x like you have 6.1 it will return 7
// $total = floor($x); // returns the largest integer less than or equal to x like you have 6.9 it will return 6
// $total = sqrt($x); // returns the square root of x like you have 25 it will return 5
//$total = pow($x,$y); // returns the power of x to y like you have 2^3 it will return 8
//$total = pi(); // returns the value of pi like you have 3.14
//$total = max($x,$y); // returns the maximum value of x and y like you have 5 and 6 it will return 6
// $total = min($x,$y); // returns the minimum value of x and y like you have 5 and 6 it will return 5
//$total = rand(); // returns a random number between x and y like you have 5 and 10 it will return 7
  echo "The sum of x and y :".$total;



?>