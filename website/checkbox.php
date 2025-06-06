<!-- checkbox_example.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Two Checkboxes Example</title>
</head>

<body>

    <form action="checkbox.php" method="post">
        <input type="checkbox" name="check1" value="Yes"> I agree<br>
        <input type="checkbox" name="check2" value="yes"> i am not agree<br><br>

        <input type="submit" name="Submit">
    </form>
</body>

</html>



<?php
if (isset($_POST['Submit'])) {
    if (isset($_POST['check1'])) {
        echo "Checkbox 1 is checked.<br>";
    } else {
        echo "Checkbox 1 is not checked.<br>";
    }

    if (isset($_POST['check2'])) {
        echo "Checkbox 2 is checked.<br>";
    } else {
        echo "Checkbox 2 is not checked.<br>";
    }
} else {
    echo "Form not submitted.";
}

?>