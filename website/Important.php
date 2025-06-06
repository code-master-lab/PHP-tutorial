<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="important.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form><br>
</body>

</html>
<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = (4 / 3) * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "The circumference of the circle is: " . $circumference . "cm" . "<br>";
echo "The area of the circle is: " . $area . "cm^2" . "<br>";
echo "The volume of the sphere is: " . $volume . "cm^3" . "<br>";
?>