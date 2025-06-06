<?php

session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Thise is home page</h1><br>
        <form action = "home.php" method="post">
            <input type="submit" name="logout" value ="logout"><br>
        </from>
 </body>
</html>

<?php
echo $_SESSION['name'] . "<br>"; 
echo $_SESSION['age']   . "<br> ";

if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to index.php
     // Exit the script
}


?>
