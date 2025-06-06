<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Theatre Booking</title>
</head>
<body>

<h2>Theatre Ticket Booking</h2>

<form action="" method="post">
    <label>Enter Your Name:</label>
    <input type="text" name="username" required><br><br>

    <label>Select Movie:</label>
    <select name="movie">
        <option value="Avengers">Avengers (₹150)</option>
        <option value="Inception">Inception (₹180)</option>
        <option value="3Idiots">3 Idiots (₹120)</option>
    </select><br><br>

    <label>Number of Tickets:</label>
    <input type="number" name="tickets" min="1" required><br><br>

    <input type="submit" name="submit" value="Book Now">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $movie = $_POST['movie'];
    $tickets = $_POST['tickets'];

    // Set price per ticket based on selected movie
    if ($movie == "Avengers") {
        $price = 150;
    } elseif ($movie == "Inception") {
        $price = 180;
    } else {
        $price = 120;
    }

    $total = $price * $tickets;

    echo "<h3>Booking Summary:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Movie: " . $movie . "<br>";
    echo "Tickets: " . $tickets . "<br>";
    echo "Total Bill: ₹" . $total . "<br>";
}
?>

