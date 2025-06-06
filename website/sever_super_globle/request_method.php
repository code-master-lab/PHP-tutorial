
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request_method.php" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit">
</body>
</html>
<?php

 
// In thise example learn about post method
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting data from the form using $_POST super global variable
    $name = $_POST["name"];
    echo "<br>Hello, $name!<br>";
} else {
    echo "<br>Please submit the form.<br>";
}
//     echo "<br>";




// foreach ($_SERVER as $key => $value) {
//     echo "$key => $value <br>";
// }
// echo "<br>";


?>