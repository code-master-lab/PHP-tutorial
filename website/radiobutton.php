<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Example</title>
</head>

<body>
    <form action="radiobutton.php" method="POST">
        <h2>Select Your Credit Card</h2>
        <label><input type="radio" name="credit_card" value="HDFC CARD"> HDFC CARD</label><br>
        <label><input type="radio" name="credit_card" value="SBI CARD"> SBI CARD</label><br>
        <label><input type="radio" name="credit_card" value="ICICI CARD"> ICICI CARD</label><br>
        <input type="submit" name="confirm" value="CONFIRM">
    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];

        if ($credit_card == "HDFC CARD") {
            echo "You selected HDFC card.";
        } elseif ($credit_card == "SBI CARD") {
            echo "You selected SBI card.";
        } elseif ($credit_card == "ICICI CARD") {
            echo "You selected ICICI card.";
        } else {
            echo "Invalid card selected.";
        }
    } else {
        echo "Please select a card.";
    }
}

?>